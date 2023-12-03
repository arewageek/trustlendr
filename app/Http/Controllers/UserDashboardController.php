<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index (Request $request){

        $id = Auth() -> user() -> blockchainID;

        $applicationsCount = Application::where(['applicant' => $id]) -> count();
        $approvedApplicationsCount = Application::where(['applicant' => $id, 'status' => 'approved']) -> count();
        $pendingApplicationsCount = Application::where(['applicant' => $id, 'status' => 'pending']) -> count();

        $pendingApplicationsList = Application::where(['applicant' => $id, 'status' => 'pending']) -> orderBy('id', 'desc') -> limit(10) -> get();
        $approvedApplicationsList = Application::where(['applicant' => $id, 'status' => 'confirmed' ]) -> orderBy('id', 'desc') -> limit(20) -> get();

        $approvedApplicationsPercentage = $applicationsCount > 0 ? ($approvedApplicationsCount/$applicationsCount) * 100 : 0;
        $pendingApplicationsPercentage = $applicationsCount > 0 ? ($pendingApplicationsCount/$applicationsCount) * 100 : 0;

        $rejectedApplications = Application::where(['applicant' => $id, 'status' => 'rejected']) -> count();
        $rejectedApplicationsPercent = $applicationsCount > 0 ? ($rejectedApplications/$applicationsCount) * 100 : 0;
        
        $oldestLoanData = Application::where(['applicant' => $id, 'status' => 'confirmed']) -> first();
        // $oldestLoanArr = $oldestLoanData[0];
        
        return view('user.dashboard', [
            'applicationsCount' => $applicationsCount,
            'approvedApplications' => [
                'count' => $approvedApplicationsCount,
                'percentage' => $approvedApplicationsPercentage,
                'list' => $approvedApplicationsList,
            ],
            'pendingApplications' => [
                'count' => $pendingApplicationsCount,
                'percentage' => $pendingApplicationsPercentage,
                'list' => $pendingApplicationsList
            ],
            'rejectedApplicationsPercent' => $rejectedApplicationsPercent,
            'rejectedApplicationsCount' => $rejectedApplications,
            'oldestLoan' => $oldestLoanData
        ]);
    }
}
