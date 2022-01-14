<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Verify;

class DashboardController extends Controller
{
    public function index()
   {
     
       if(Auth::user()->hasRole('staddAdmin')){
          $verify = Verify::all();
            return view('dashboardStaddAdmin',compact('verify'));
       }elseif(Auth::user()->hasRole('approvalCommittee')){
          $verify = Verify::all();
            return view('dashboardApprovalCommittee',compact('verify'));
       }elseif(Auth::user()->hasRole('organizer')){
          $verify = Verify::all();
        return view('dashboardOrganizer',compact('verify'));
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
