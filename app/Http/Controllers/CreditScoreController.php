<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;

class CreditScoreController extends Controller
{
    public function fetch($id){
        $data = User::where(['blockchainID' => $id]) -> get();
        if(count($data) < 1){
            return response()->json([
                'status' => 404,
                'message' => "Could not find any user with this id"
            ], 200);
        }

        else{
            $score = $data;
    
            return response()->json([
                'status' => 200,
                'message' => $score
            ], 200);
        }
        
    }

    public function repay($reference, $amount){
        //  transaction verification
        $id_arr = explode('-',$reference);
        $id = $id_arr[0];
        
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".env('PAYSTACK_API'),
            "Cache-Control: no-cache",
            ),
        ));
        
        $response = curl_exec($curl);

        // return $response;
        $err = curl_error($curl);

        curl_close($curl);
        
        if ($err) {
            return $err;
        } else {
            $data = json_decode($response, false);

            // return $data;

            if($data -> data -> amount == $amount){

                // return $data -> data -> status;
                if($data -> data -> status == 'success'){

                    // $originalPayDayData = Application::where(['app_id' => $id]) -> first();
                    
                    // $originalPayDay = new Carbon("{$originalPayDate}")
                    $now = Carbon::now();
                    
                    $prevAppsHealth = Application::where(['applicant' => Auth() -> user() -> blockchainID]) -> sum('health');

                    $creditScore = ($prevAppsHealth/100) * 850;
                    
                    Application::where(['app_id' => $id]) -> update(['status' => 'repaid', 'health' => 100]);
                    User::where(['blockchainId' => Auth() -> user() -> blockchainId]) -> update(['score' => $creditScore]);
                    
                    return response()->json([
                        'status' => 200,
                        'message' => $data
                    ], 200);
                }
                else{
                    return response()->json([
                        'status' => 400,
                        'message' => "Payment not successful"
                    ], 200);
                }
            }

            else{
                // echo $data -> data -> amount. "<br>";
                // echo $amount;
                return response()->json([
                    'status' => 400,
                    'message' => "Incorrect amount paid"
                ], 200);
            }

        }
    }
}
