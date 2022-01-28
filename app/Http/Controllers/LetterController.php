<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;
use DB;
use PDF;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
    }

    public function pdf($id)
    {
      $proposal = Proposal::findOrFail($id);

      $user             = auth()->user();
      //share data to view
      $pdf = PDF::loadView('ApprovalLetter.PDFapproval',compact('proposal', 'user'));
      return $pdf->stream('PDFapproval.ApprovalLetter');
    }
    
    public function statusReport()
    {
      $proposal = Proposal::all();

      //share data to view
      $pdf = PDF::loadView('ApprovalLetter.GenerateReport',compact('proposal'));
      return $pdf->stream('GenerateReport.ApprovalLetter');
    }
}
