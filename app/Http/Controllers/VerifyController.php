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
        $proposal = Proposal::findOrFail($id);
        $verify = $proposal->replicate();
        $verify->setTable('verify');

        switch ($request->input('action')) {
          case 'reject':

                $verify->id = $id;
                $verify->programmeStatus = value('Reject');
                $verify->verificationComment = request('verificationComment');
                $verify->save();
                $proposal->delete();

               break;

          case 'KIV':

              $verify->id = $id;
              $verify->programmeStatus = value('Pending');
              $verify->verificationComment = request('verificationComment');
              $verify->save();
              $proposal->delete();

              break;

          case 'accept':

              $verify->id = $id;
              $verify->programmeStatus = value('Accept');
              $verify->verificationComment = request('verificationComment');
              $verify->save();
              $proposal->delete();

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