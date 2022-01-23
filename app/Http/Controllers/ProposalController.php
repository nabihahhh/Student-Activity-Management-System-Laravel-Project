<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
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
    public function index1(Request $request)
    {
        $request->session()->forget('Proposal');

        $products = \App\Models\Proposal::all();

        return view('proposal.index',compact('products'));
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
            'invitationalProgramme'  => 'in:1,0',
            'jointProgramme' => 'in:1,0',
            'creditedProgramme' => 'in:1,0',
            'othersProgramme' => 'nullable:Proposals,$id',
            //add startdate and enddate, remove date
    
            
            
            

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
            'societyClubAssociation' => 'nullable:Proposals,$id',

            'participationActivity' => 'in:1,0',
            'competitionActivity' => 'in:1,0',

            'universityLevel' => 'in:1,0',
            'nationalLevel' => 'in:1,0',
            'InternationalLevel' => 'in:1,0',
            'societyDepartmentLevel' => 'in:1,0',
            'compulsoryProgrammeLevel' => 'in:1,0',

            'localParticipant' => 'nullable:Proposals,$id',
            'InternationalParticipant' => 'nullable:Proposals,$id',

            'attendingCeremonyActivity' => 'in:1,0',
            'bullettinNewsletterActivity' => 'in:1,0',
            'communityServiceActivity' => 'in:1,0',
            'counselingActivity' => 'in:1,0',
            'promotionBoothActivity' => 'in:1,0',
            'culturalActivity' => 'in:1,0',
            'debateActivity' => 'in:1,0',
            'educationalTripActivity' => 'in:1,0',
            'entrepreneurshipActivity' => 'in:1,0',
            'annualGrandMeetingActivity' => 'in:1,0',
            'intellectualActivity' => 'in:1,0',
            'leadershipActivity' => 'in:1,0',
            'recreationalActivity' => 'in:1,0',
            'socialGatheringActivity' => 'in:1,0',
            'seminarConferenceActivity' => 'in:1,0',
            'spiritualActivity' => 'in:1,0',
            'sportActivity' => 'in:1,0',
            'trainingActivity' => 'in:1,0',
            'uniformBodiesActivity' => 'in:1,0',
            
            
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
        return view('proposal.step3',compact('Proposal'));
    }

   /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
         $Proposal = $request->session()->get('Proposal');

         $validatedData = $request->validate([
            'sdgGoal1' => 'in:1,0',
            'sdgGoal2' => 'in:1,0',
            'sdgGoal3' => 'in:1,0',
            'sdgGoal4' => 'in:1,0',
            'sdgGoal5' => 'in:1,0',
            'sdgGoal6' => 'in:1,0',
            'sdgGoal7' => 'in:1,0',
            'sdgGoal8' => 'in:1,0',
            'sdgGoal9' => 'in:1,0',
            'sdgGoal10' => 'in:1,0',
            'sdgGoal11' => 'in:1,0',
            'sdgGoal12' => 'in:1,0',
            'sdgGoal13' => 'in:1,0',
            'sdgGoal14' => 'in:1,0',
            'sdgGoal15' => 'in:1,0',
            'sdgGoal16' => 'in:1,0',
            'sdgGoal17' => 'in:1,0',

            'maqasidShariahFaith' => 'in:1,0',
            'maqasidShariahLife' => 'in:1,0',
            'maqasidShariahIntellect' => 'in:1,0',
            'maqasidShariahLineage' => 'in:1,0',
            'maqasidShariahWealth' => 'in:1,0',

            'missionOfIiumIslamization' => 'in:1,0',
            'missionOfIiumInternationalization' => 'in:1,0',
            'missionOfIiumIntegration' => 'in:1,0',
            
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
               'programmeManagerName' => 'nullable:Proposals,$id',
               'programmeManagerMatricNo' => 'nullable:Proposals,$id',
               'programmeManagerPhoneNo' => 'nullable:Proposals,$id',

               'programmeSecretaryName' => 'nullable:Proposals,$id',
               'programmeSecretaryMatricNo' => 'nullable:Proposals,$id',
               'programmeSecretaryPhoneNo' => 'nullable:Proposals,$id',

               'programmeTreasurerName' => 'nullable:Proposals,$id',
               'programmeTreasurerMatricNo' => 'nullable:Proposals,$id',
               'programmeTreasurerPhoneNo' => 'nullable:Proposals,$id',

               'presidentClubSocietyName' => 'nullable:Proposals,$id',
               'presidentClubSocietyMatricNo' => 'nullable:Proposals,$id',
               'presidentClubSocietyPhoneNo' => 'nullable:Proposals,$id',

               'clarifyTick' => 'required| in:1,0',//clarify tick add db
               
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

       public function createStep5(Request $request)
       {
           $Proposal = $request->session()->get('Proposal');
   
           return view('proposal.step5',compact('Proposal'));
       }
   
       /**
        * Write code on Method
        *
        * @return response()
        */
       public function PostcreateStep5(Request $request)
       {
           $validatedData = $request->validate([
                'balanceBudget' => 'nullable:Proposals,$id',
                'budgetRequestedFromSTADDToCitra' => 'nullable:Proposals,$id',
                'budgetRequestedFromKuliyyah' => 'nullable:Proposals,$id',
                'budgetRequestedFromMahallah' => 'nullable:Proposals,$id',
                'budgetRequestedFromSponsors' => 'nullable:Proposals,$id',

                'typeTransportation' => 'nullable:Proposals,$id',
                'quantityTransportation' => 'nullable:Proposals,$id',
                'typeTransportation' => 'nullable:Proposals,$id',

                'approvalCommitteeName' => 'nullable:Proposals,$id',
                'approvalCommitteeName2' => 'nullable:Proposals,$id',
                'approvalCommitteeName3' => 'nullable:Proposals,$id',
                'approvalCommitteeName4' => 'nullable:Proposals,$id',


               
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
        return view('Proposal.step6',compact('Proposal'));
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
    public function store1(Request $request)
    {
        $Proposal = $request->session()->get('Proposal');
        // $date= $request->input('date');
        Proposal::create($request->all());

        $Proposal->save();

        return redirect('/data1');
    }

    public function postShowDetails($id)
    {
        $proposal = Proposal::find($id);
        return view('verify.showDetails', compact('proposal','id'));
    }

// search keyword
    public function searchKeyboard(Request $request)
    {
    
      $keyword = $request->get('keyword');
      $user = Auth::user()->name ;
      $user2 = Auth::user()->name ;
      $user3 = Auth::user()->name ;
      $user4 = Auth::user()->name ;
      
      
      $proposal = DB::table('proposals')
      ->where('programmeName', 'like', '%'.$keyword.'%')
      ->where('programmeOrganizer', 'like', '%'.$keyword.'%')
      
      ->where('approvalCommitteeName', 'like', '%'.$user.'%')
      ->orWhere('approvalCommitteeName2', 'like', '%'.$user2.'%')
      ->orWhere('approvalCommitteeName3', 'like', '%'.$user3.'%')
      ->orWhere('approvalCommitteeName4', 'like', '%'.$user4.'%')
      ->get();
    //   ->paginate(5);
    //   $proposal = DB::table('proposals')
    //   ->where('proposals.approvalCommitteeName', '_approval_committee.approvalCommitteeName')
    //   ->paginate(5);
      return view('verify.showProposalTable', ['proposal' => $proposal->where('programmeStatus', 'Pending approvals')
    //   ->where('approvalCommitteeName', 'like', $user)
        // ->orWhere('approvalCommitteeName2', 'like', $user)
        // ->orWhere('approvalCommitteeName3', 'like', $user)
        // ->orWhere('approvalCommitteeName4', 'like', $user)
        ]);

    }
    
}

?>