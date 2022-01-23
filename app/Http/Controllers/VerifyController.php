<?php

namespace App\Http\Controllers;

use App\Models\Verify;
use App\Models\Proposal;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $verify = Verify::all();
      // return view('verify.showListStatus',compact('verify'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyFormCreate(Request $request, $id)
    {
      $Proposal = Proposal::find($id);
      return view('verify.showDetails', compact('Proposal','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyFormPost(Request $request, $id)
    {
        // $proposal = Proposal::findOrFail($id);
        // $proposal = $proposal->replicate();
        // $proposal->setTable('proposal');

        switch ($request->input('action')) {
          case 'reject':

                // $Proposal->id = $id;
                Proposal::where('id', $id)->update(array('programmeStatus' => 'Reject'));
                Proposal::where('id', $id)->update(array('verificationComment' => request('verificationComment')));
                // $Proposal->save();
                // $Proposal->delete();

               break;

          case 'KIV':

              // $Proposal->id = $id;
              // $Proposal->programmeStatus = value('Keep in View');
              Proposal::where('id', $id)->update(array('programmeStatus' => 'Keep in View'));
              Proposal::where('id', $id)->update(array('verificationComment' => request('verificationComment')));
              // $Proposal->save();
              // $Proposal->delete();

              break;

          case 'accept':

              // $Proposal->id = $id;
              Proposal::where('id', $id)->update(array('programmeStatus' => 'Accept'));
              // $Proposal->programmeStatus = value('Accept');
              Proposal::where('id', $id)->update(array('verificationComment' => request('verificationComment')));
              // $Proposal->verificationComment = request('verificationComment');
              // $Proposal->save();
              // $Proposal->delete();

              break;
      }

      return redirect('/verify');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifyList(Request $request)
    {
      $verify = Verify::all();
      return view('verify.showListStatus',compact('verify'));
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function showVerifyDetails($id)
    {
        $verify = Verify::findOrFail($id);
        return view('verify.showVerifyDetails', compact('verify','id'));
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
     * @param  \App\Models\Verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verify $verify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verify  $verify
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verify $verify)
    {
        //
    }
}