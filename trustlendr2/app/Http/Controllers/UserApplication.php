<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EthController;
use Carbon\Carbon;

// use Illuminate\Support\Facades\DB;
use App\Models\Application;
use App\Models\User;

class UserApplication extends Controller
{
    public function create (Request $request){

        $duration_in_months = $request -> duration;
        $duration = intval($duration_in_months);

        $interest = $request -> interest;
        $amount = $request -> amount;
        $transaction_hash = $request -> hash;

        $dueDate = Carbon::now() -> addDays($duration);
        $dueDateUnformatted = Carbon::createFromTimestamp('U', $duration/1000)-> addYears(53);
        $dueDate = $dueDateUnformatted -> format('Y-m-d H:i:s');
        

        $application = new Application();

        // User::where(['blockchainID', Auth() -> user() -> blockchainID]) -> update(['blockchainID' => $eth -> createID()]);

        $application -> applicant = Auth() -> user() -> blockchainID;
        $application -> amount = intVal($amount);
        $application -> interest = intVal($interest);
        $application -> app_id = $transaction_hash;
        $application -> due_date = $dueDate;

        if($application -> save()){

            $creditScore = new CreditScoreController();
            $creditScore -> updateCreditScore(Auth() -> user() -> blockchainID);

            // User::where(['blockchainID' => Auth() -> user() -> blockchainID]) -> update(['score' => Auth() -> user() -> score - 10]);
            
            return response()->json([
                'status' => 201,
                'message' => "Successfully created an application"
            ], 201);
        }
        else{
            return response() -> json([
                'status' => 400,
                'message' => "Could not update the detailsin the server"
            ]);
        }
    }
}
