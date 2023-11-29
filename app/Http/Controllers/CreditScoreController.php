<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
}
