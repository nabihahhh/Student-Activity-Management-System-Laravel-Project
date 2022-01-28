<?php

namespace App\Http\Controllers;

use App\Models\ApprovalCommittee;
use Illuminate\Http\Request;

class ApprovalCommitteeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    $approvalcommittee = ApprovalCommittee::all();
    return view('ApprovalCommittee.approvalCommitteeList',compact('approvalcommittee'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function AddApprovalCommitteeCreate(Request $request)
  {
    return view('ApprovalCommittee.addApprovalCommittee');
  }

  public function AddApprovalCommitteePost(Request $request)
  {
    $approvalcommittee = new ApprovalCommittee();
    $approvalcommittee->approvalCommitteeStaffID = $request->approvalCommitteeStaffID;
    $approvalcommittee->approvalCommitteeName = $request->approvalCommitteeName;
    $approvalcommittee->approvalCommitteeUsername = $request->approvalCommitteeUsername;
    $approvalcommittee->approvalCommitteePhoneNo = $request->approvalCommitteePhoneNo;
    $approvalcommittee->approvalCommitteeOrg = $request->approvalCommitteeOrg;
    $approvalcommittee->approvalCommitteePosition = $request->approvalCommitteePosition;
    $approvalcommittee->save();

    return redirect('/approvalcommittee');
  }

  /**
   * Display the specified resource.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\ApprovalCommittee  $approvalcommittee
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $approvalcommittee = ApprovalCommittee::find($id);
      //$approvalcommittee->approvalCommitteeStaffID = $approvalCommitteeStaffID;
      return view('ApprovalCommittee.editApprovalCommittee', compact('approvalcommittee','id'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\ApprovalCommittee  $approvalcommittee
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $approvalcommittee = ApprovalCommittee::find($id);
      $approvalcommittee->approvalCommitteeStaffID = $request->approvalCommitteeStaffID;
      $approvalcommittee->approvalCommitteeName = $request->approvalCommitteeName;
      $approvalcommittee->approvalCommitteeUsername = $request->approvalCommitteeUsername;
      $approvalcommittee->approvalCommitteePhoneNo = $request->approvalCommitteePhoneNo;
      $approvalcommittee->approvalCommitteeOrg = $request->approvalCommitteeOrg;
      $approvalcommittee->approvalCommitteePosition = $request->approvalCommitteePosition;
      echo $approvalcommittee->save();

      return redirect('/approvalcommittee');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\ApprovalCommittee  $approvalcommittee
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
      $approvalcommittee = ApprovalCommittee::find($id);
      $approvalcommittee->where('id', $id)->delete();

      return redirect('/approvalcommittee');
  }

 
}

