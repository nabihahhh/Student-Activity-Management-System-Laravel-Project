<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Verify;
use App\Models\Proposal;
use App\Models\User;
use App\Models\Status;
use App\Models\Role;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    public function index(Request $request)
   {

      $Proposal = $request->session()->get('Proposal');
      $Proposal = Proposal::with('status', 'approvalCommittee', 'cfo')->get();  
      $defaultStatus    = Status::find(1);
      $user             = auth()->user();
      // Proposal::create($request->all());

      // $Proposal->save();
     
       if(Auth::user()->hasRole('staddAdmin')){
         
        $proposal = Proposal::with('status', 'approvalCommittee')->get(); 
        $defaultStatus    = Status::find(1);
        $user             = auth()->user();

            return view('dashboardStaddAdmin',compact('proposal', 'defaultStatus', 'user'));
       }elseif(Auth::user()->hasRole('approvalCommittee')){
          
          $proposal = Proposal::with('status', 'approvalCommittee')->get(); 
          $defaultStatus    = Status::find(1);
          $user             = auth()->user();

            return view('dashboardApprovalCommittee',compact('proposal', 'defaultStatus', 'user'));
       }elseif(Auth::user()->hasRole('organizer')){

          
          $proposal = Proposal::with('status', 'approvalCommittee')->get(); 
          $defaultStatus    = Status::find(1);
          $user             = auth()->user();

        return view('dashboardOrganizer',compact('proposal','defaultStatus', 'user'));
      }
   }

   public function send(Request $request, Proposal $proposal)
    {
        abort_if(!auth()->user()->is_admin, Response::HTTP_FORBIDDEN, '403 Forbidden');

        // fix this reason why 403 forbidden
        if ($proposal->status_id == 1) {
            $column = 'approvalCommittee_id';
            $users  = Role::find(2)->users->pluck('id');
            $status = 2;
        } else if (in_array($proposal->status_id, [3,4])) {
            $column = 'approvalCommittee2_id';
            $users  = Role::find(2)->users->pluck('id');
            $status = 5;
        } else if (in_array($proposal->status_id, [6,7])) {
            $column = 'approvalCommittee3_id';
            $users  = Role::find(2)->users->pluck('id');
            $status = 8;
        } else if (in_array($proposal->status_id, [9,10])) {
            $column = 'approvalCommittee3_id';
            $users  = Role::find(2)->users->pluck('id');
            $status = 11;
        }else {
            abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        $request->validate([
            'user_id' => 'required|in:' . $users->implode(',')
        ]);

        $proposal->update([
            $column => $request->user_id,
            'status_id' => $status
        ]);

        return redirect()->route('dashboard')->with('message', 'Loan application has been sent for analysis');
    }

    public function showSend(Proposal $proposal)
    {
        // abort_if(!auth()->user()->is_admin, Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($proposal->status_id == 1) {
            $role = 'ApprovalCommittee';
            $users = Role::find(2)->users->pluck('name', 'id');
        } else if (in_array($proposal->status_id, [3,4])) {
            $role = 'approvalCommittee';
            $users = Role::find(2)->users->pluck('name', 'id');
        } else {          
            $role = 'Approval Committee ';      
            $users = Role::find(2)->users->pluck('name', 'id');
            
            // abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
            
        }

        return view('admin.proposal.send', compact('proposal', 'role', 'users'));
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
