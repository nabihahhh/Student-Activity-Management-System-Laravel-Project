<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\File;


class ProposalController extends Controller
{
   /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $request->session()->forget('Proposal');

        $products = \App\Models\Proposal::all();

        return view('Proposal.index1',compact('proposals'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep1(Request $request)
    {
        $Proposal = $request->session()->get('Proposal');


        return view('proposal.step1',compact('Proposal'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'programmeBudget' => 'nullable:Proposals',
            'programmeName' => 'required|unique:Proposals',
            'programmeOrganizer' => 'nullable:Proposals,$id',
            'date' => 'nullable:Proposals,$id',
            'venue' => 'nullable:Proposals,$id',
            'studentDrivenProgramme' => 'in:1,0',
            'departmentDrivenProgramme' => 'in:1,0',
            'jointProgramme' => 'in:1,0',
            'creditedProgramme' => 'in:1,0',
            'othersProgramme' => 'nullable:Proposals,$id',
    
            
            
            

        ]);

        // $Report->sdgGoal1 = $request->input('sdgGoal1') ? true : false;

        if(empty($request->session()->get('Proposal'))){
            $Proposal = new \App\Models\Proposal();
            $Proposal->fill($validatedData);
            // $Report->sdgGoal1 = $request->has('sdgGoal1');
            // $Report->sdgGoal1 = $request->has('sdgGoal1');
            $request->session()->put('Proposal', $Proposal);
        }else{
            $Proposal = $request->session()->get('Proposal');
            $Proposal->fill($validatedData);
            $request->session()->put('Proposal', $Proposal);
        }
        
        return redirect('/proposal-create-step-2');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep2(Request $request)
    {
        $Proposal = $request->session()->get('Proposal');

        return view('proposal.step2',compact('Proposal'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'collaborations' => 'nullable:Proposals,$id',
            'kullDeptUnitInCharge' => 'nullable:Proposals,$id',
            'conclusion' => 'nullable:Proposals,$id',
            'societyClubAssociation' => 'nullable:Proposals,$id',

            'participationActivity' => 'nullable:Proposals,$id',
            'competitionActivity' => 'nullable:Proposals,$id',

            'universityLevel' => 'nullable:Proposals,$id',
            'nationalLevel' => 'nullable:Proposals,$id',
            'InternationalLevel' => 'nullable:Proposals,$id',
            'societyDepartmentLevel' => 'nullable:Proposals,$id',
            'compulsoryProgrammeLevel' => 'nullable:Proposals,$id',

            'localParticipant' => 'nullable:Proposals,$id',
            'InternationalParticipant' => 'nullable:Proposals,$id',

            'attendingCeremonyActivity' => 'nullable:Proposals,$id',
            'bullettinNewsletterActivity' => 'nullable:Proposals,$id',
            'communityServiceActivity' => 'nullable:Proposals,$id',
            'counselingActivity' => 'nullable:Proposals,$id',
            'promotionBoothActivity' => 'nullable:Proposals,$id',
            'culturalActivity' => 'nullable:Proposals,$id',
            'debateActivity' => 'nullable:Proposals,$id',
            'educationalTripActivity' => 'nullable:Proposals,$id',
            'entrepreneurshipActivity' => 'nullable:Proposals,$id',
            'annualGrandMeetingActivity' => 'nullable:Proposals,$id',
            'intellectualActivity' => 'nullable:Proposals,$id',
            'leadershipActivity' => 'nullable:Proposals,$id',
            'recreationalActivity' => 'nullable:Proposals,$id',
            'socialGatheringActivity' => 'nullable:Proposals,$id',
            'seminarConferenceActivity' => 'nullable:Proposals,$id',
            'spiritualActivity' => 'nullable:Proposals,$id',
            'sportActivity' => 'nullable:Proposals,$id',
            'trainingActivity' => 'nullable:Proposals,$id',
            'uniformBodiesActivity' => 'nullable:Proposals,$id',
            
            
        ]);
        if(empty($request->session()->get('Proposal'))){
            $Proposal = new \App\Models\Proposal();
            $Proposal->fill($validatedData);
            $request->session()->put('Proposal', $Proposal);
        }else{
            $Proposal = $request->session()->get('Proposal');
            $Proposal->fill($validatedData);
            $request->session()->put('Proposal', $Proposal);
        }
        return redirect()->route('proposal.create.step.3');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep3(Request $request)
    {  
        $Proposal = $request->session()->get('Proposal');
        return view('Proposal.step3',compact('Proposal'));
    }

   /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
         $Proposal = $request->session()->get('Proposal');

        // if(!isset($Report->file_path)) {
        //     $request->validate([
        //         // 'file_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     ]);
        //     $fileName = "productImage-" . time() . '.' . request()->file_path->getClientOriginalExtension();
        //     $request->file_path->storeAs('file_path', $fileName);
        //     $Proposal = $request->session()->get('Proposal');
        //     $Proposal->file_path = $fileName;
        //     $request->session()->put('Proposal', $Proposal);
        // }
        return view('Proposal.step4',compact('Proposal'));
       }

       public function createStep4(Request $request)
       {
           $Proposal = $request->session()->get('Proposal');
   
           return view('proposal.step4',compact('Proposal'));
       }
   
       /**
        * Write code on Method
        *
        * @return response()
        */
       public function PostcreateStep4(Request $request)
       {
           $validatedData = $request->validate([
            //    'achievementsObservation' => 'nullable:Reports,$id',
            //    'shortcomings' => 'nullable:Reports,$id',
            //    'conclusion' => 'nullable:Reports,$id',
            //    'suggestions' => 'nullable:Reports,$id',
               
           ]);
           if(empty($request->session()->get('Proposal'))){
               $Proposal = new \App\Models\Proposal();
               $Proposal->fill($validatedData);
               $request->session()->put('Proposal', $Proposal);
           }else{
               $Proposal = $request->session()->get('Proposal');
               $Proposal->fill($validatedData);
               $request->session()->put('Proposal', $Proposal);
           }
           return redirect()->route('proposal.create.step.4');
       }

       public function createStep5(Request $request)
       {
           $Proposal = $request->session()->get('Proposal');
   
           return view('proposal.step4',compact('Proposal'));
       }
   
       /**
        * Write code on Method
        *
        * @return response()
        */
       public function PostcreateStep5(Request $request)
       {
           $validatedData = $request->validate([
            //    'achievementsObservation' => 'nullable:Reports,$id',
            //    'shortcomings' => 'nullable:Reports,$id',
            //    'conclusion' => 'nullable:Reports,$id',
            //    'suggestions' => 'nullable:Reports,$id',
               
           ]);
           if(empty($request->session()->get('Proposal'))){
               $Proposal = new \App\Models\Proposal();
               $Proposal->fill($validatedData);
               $request->session()->put('Proposal', $Proposal);
           }else{
               $Proposal = $request->session()->get('Proposal');
               $Proposal->fill($validatedData);
               $request->session()->put('Proposal', $Proposal);
           }
           return redirect()->route('proposal.create.step.5');
       }


       
        


    

   /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeImage(Request $request)
    {
        $Proposal = $request->session()->get('Proposal');

        $Proposal->file_path = null;

        return view('Proposal.step3',compact('Proposal'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $Proposal = $request->session()->get('Proposal');
        // $date= $request->input('date');
        Proposal::create($request->all());

        $Proposal->save();

        return redirect('/data1');
    }
    
}

?>