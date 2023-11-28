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
        $duration = intval($duration_in_months) * 30;

        $lender = $request -> lender;
        $amount = $request -> amount;

        $lender_arr = explode(',',$lender);
        $agent = $lender[0];
        $interest = $lender[1];
        $min_credit_score = $lender[2];

        $dueDate = Carbon::now() -> addDays($duration);

        $eth = new EthController();
        
        $transaction_hash = $eth -> createID();

        $application = new Application();

        // User::where(['blockchainID', Auth() -> user() -> blockchainID]) -> update(['blockchainID' => $eth -> createID()]);

        $application -> applicant = Auth() -> user() -> blockchainID;
        $application -> amount = intVal($amount);
        $application -> interest = intVal($interest);
        $application -> app_id = $transaction_hash;
        $application -> due_date = $dueDate;

        if($application -> save()){
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
