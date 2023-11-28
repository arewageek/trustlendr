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
}
