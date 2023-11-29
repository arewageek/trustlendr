<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Application;

class UserApplicationsController extends Controller
{
    public function index(){

        $id = Auth() -> user() -> blockchainID;
        
        $applicationsList = Application::where(['applicant' => $id ]) -> orderBy('id', 'desc') -> limit(20) -> get();

        return view('user.applications', [
            'approvedApplications' => [
                'list' => $applicationsList
            ]
        ]);
    }
}
