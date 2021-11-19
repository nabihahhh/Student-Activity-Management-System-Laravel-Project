<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
   {
       if(Auth::user()->hasRole('staddAdmin')){
            return view('dashboardStaddAdmin');
       }elseif(Auth::user()->hasRole('approvalCommittee')){
            return view('dashboardApprovalCommittee');
       }elseif(Auth::user()->hasRole('organizer')){
        return view('dashboardOrganizer');
   }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
