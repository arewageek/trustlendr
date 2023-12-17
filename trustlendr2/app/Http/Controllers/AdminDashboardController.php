<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(){
        $allUsers = User::where(['role' => 'user']) -> count();
        $newUsers = User::where(['role' => 'user']) -> orderBy('id', 'desc') -> get();

        $applicationsCount = Application::count();
        $approvedApplications = Application::where(['status' => 'confirmed']) -> count();
        $pendingApplications = Application::where(['status' => 'pending']) -> count();

        $approvedAppsCount = $applicationsCount > 0 ? ($approvedApplications/$applicationsCount) * 100 : 0;
        $pendingAppsCount = $applicationsCount > 0 ? ($pendingApplications/$applicationsCount) * 100 : 0;

        $pendingApplicatonsList = Application::where(['status' => 'pending']) -> orderBy('id', 'DESC') -> limit(5) -> get();
        $applicatonsList = Application::orderBy('id', 'desc') -> limit(20) -> get();

        return view('admin.dashboard', [
            'allUsers' => $allUsers,
            'newUsers' => $newUsers,
            'applicationsCount' => $applicationsCount,
            'approvedApplications' => [
                'count' => $approvedApplications,
                'percentage' => $approvedAppsCount,
                'list' => $applicatonsList
            ],
            'pendingApplications' => [
                'count' => $pendingApplications,
                'percentage' => $pendingAppsCount,
                'list' => $pendingApplicatonsList
            ],
        ]);
    }
}
