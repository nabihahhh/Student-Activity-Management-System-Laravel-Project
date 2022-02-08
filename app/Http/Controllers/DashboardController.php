<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Verify;
use App\Models\Proposal;
use App\Models\User;
use App\Models\Status;
use App\Models\Role;
use App\Models\Feedback;
use App\Models\Report;
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
        $report = Report::with('status')->get(); 
        $defaultStatus    = Status::find(1);
        $user             = auth()->user();

            return view('dashboardStaddAdmin',compact('proposal', 'defaultStatus', 'user', 'report'));
       }elseif(Auth::user()->hasRole('approvalCommittee')){
          
          $proposal = Proposal::with('status', 'approvalCommittee')
          ->get(); 
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

   public function index2(Request $request)
   {

    $report = Report::with('status')->get(); 
    $defaultStatus    = Status::find(1);
    $user             = auth()->user();

    return view('welcome',compact('report', 'defaultStatus', 'user'));
   }

   public function index3(Request $request)
   {

    $report = Report::with('status')->get(); 
    $defaultStatus    = Status::find(1);
    $user             = auth()->user();

    return view('dashboard',compact('report', 'defaultStatus', 'user'));
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

    public function showAnalyze(Proposal $proposal)
    {
        $user = auth()->user();

        abort_if(
            ( $proposal->status_id != 2) && ($proposal->status_id != 5) 
            && ($proposal->status_id != 8) && ($proposal->status_id != 11 && $proposal->status_id != 12 && $proposal->status_id != 13),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        return view('admin.proposal.analyze', compact('proposal', 'user'));
    }

    public function showAnalyze2(Report $report)
    {
        $user = auth()->user();
        // abort_if(
        //     ( $report->status_id != 1),
        //     Response::HTTP_FORBIDDEN,
        //     '403 Forbidden'
        // );
       
        return view('admin.report.analyze', compact('report', 'user'));
    }


    public function analyze(Request $request, Proposal $proposal)
    {
        $user = auth()->user();

        if ($proposal->status_id == 2) {
            $status = $request->has('approve') ? 3 : 4;
        } else if ($proposal->status_id == 5) {
            $status = $request->has('approve') ? 6 : 7;
        } else if ($proposal->status_id == 8) {
            $status = $request->has('approve') ? 9 : 10;
        } else if ($proposal->status_id == 11) {
            $status = $request->has('approve') ? 12 : 13;
        } else if ($proposal->status_id == 12 ||  $proposal->status_id == 13) {
            $status = $request->has('approve') ? 14 : 15;
        }else {
            // abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        

        $request->validate([
            'feedback_text' => 'nullable'
        ]);

        $proposal->feedbacks()->create([
            'feedback_text' => $request->feedback_text,
            'user_id'      => $user->id
        ]);

        $proposal->update([
            'status_id' => $status
        ]);

        return redirect()->route('dashboard')->with('message', 'Analysis has been submitted');
    }

    public function analyze2(Request $request, Report $report)
    {
        $user = auth()->user();

        if ($report->status_id == 2) {
            $status = $request->has('approve') ? 3 : 4;
        } else if ($report->status_id == 5) {
            $status = $request->has('approve') ? 6 : 7;
        } else if ($report->status_id == 8) {
            $status = $request->has('approve') ? 9 : 10;
        } else if ($report->status_id == 11) {
            $status = $request->has('approve') ? 12 : 13;
        } else if ($report->status_id == 12 ||  $report->status_id == 13) {
            $status = $request->has('approve') ? 14 : 15;
        }else {
            // abort(Response::HTTP_FORBIDDEN, '403 Forbidden');
        }

        

        // $request->validate([
        //     'feedback_text' => 'nullable'
        // ]);

        // $report->feedbacks()->create([
        //     'feedback_text' => $request->feedback_text,
        //     'user_id'      => $user->id
        // ]);

        $report->update([
            'status_id' => 14
        ]);

        return redirect()->route('pending.prf')->with('message', 'Analysis has been submitted');
    }


    public function edit(Proposal $proposal)
    {
        abort_if(
            Gate::denies('proposal_edit') || !in_array($proposal->status_id, [12,13]),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden'
        );

        $statuses = Status::whereIn('id', [1, 14, 15])->pluck('name', 'id');

        $proposal->load('status');

        return view('admin.proposal.edit', compact('statuses', 'proposal'));
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
