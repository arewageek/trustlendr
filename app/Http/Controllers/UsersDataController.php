<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersDataController extends Controller
{
    public function index(){
        $allUsers = User::where(['role' => 'user']) -> get();
        
        // return $allUsers;

        return view('admin.users', [
            'allUsers' => $allUsers,
        ]);
    }

    public function search($user){
        $user = User::where(['email' => $user]) -> get();

        
        if(count($user) < 1){
            $user = User::where('blockchainID', '===', $user) -> get();
    
            return response()->json([
                'status' => 200,
                'message' => $user
            ], 200);
        }

        return response()->json([
            'status' => 200,
            'message' => $user
        ], 200);
    }
}
