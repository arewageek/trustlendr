<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        // $approvedApplicatonsList = Application::where(['status' => 'approved']) -> get();

        return view('admin.applications',[
            'applications' => $applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $id = $request -> id;

            $updated = DB::table('applications') -> where(['app_id' => $id]) -> update(['status' => 'servicing', 'health' => 52]);

            if($updated){

                $this -> updateCreditScore($id);
                
                return response()->json([
                    'status' => 200,
                    'message' => "Your loan request has been confirmed"
                ], 200);
            }
        }
        catch(\Exception $e){
            return response()->json([
                'status' => 500,
                'message' => $e
            ], 200);
        }
    }

    private function updateCreditScore($id){
        $creditscore = new CreditScoreController();

        // get user's blockchain id before updating credit score
        $app = Application::where(['app_id' => $id]) -> first();
        $user = $app -> applicant;
        
        $creditscore -> updateCreditScore($user);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function reject(Request $request)
    {
        try{
            $id = $request -> id;

            $updated = DB::table('applications') -> where(['app_id' => $id]) -> update(['status' => 'declined', 'health' => 25]);

            
            if($updated){
                $this -> updateCreditScore($id);

                return response()->json([
                    'status' => 200,
                    'message' => "Your loan application has been rejected"
                ], 200);
            }
        }
        catch(\Exception $e){
            return response()->json([
                'status' => 500,
                'message' => $e
            ], 200);
        }
    }

    function find (Request $request){
        $param = $request -> id;
        $foundTrxs = [];
        
        $foundByAppId = Application::where(['app_id' => $param]) -> get();

        if(count($foundByAppId) > 0){
            $foundTrxs = $foundByAppId;
        }
        
        else{
            $foundByUser = Application::where(['applicant' => $param]) -> get();
            
            if(count($foundByUser) > 0){
                $foundTrxs = $foundByUser;
            }

            else{
                return response()->json([
                    'status' => 404,
                    'message' => "could not find any user with the supplied information"
                ], 200);
            }
        }

        return response()->json([
            'status' => 200,
            'method' => "found by ".(count($foundByAppId) > 0 ? 'transaction hash' : (count($foundByUser) > 0 ? 'username' : null)),
            'message' => $foundTrxs
        ], 200);
    }
}
