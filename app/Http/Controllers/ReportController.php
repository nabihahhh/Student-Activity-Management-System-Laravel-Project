<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\File;


class ReportController extends Controller
{
   /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $request->session()->forget('Report');

        $products = \App\Models\Report::all();

        return view('Report.index',compact('products'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep1(Request $request)
    {
        $Report = $request->session()->get('Report');


        return view('report.step1',compact('Report'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'programmeName' => 'required|unique:Reports',
            'programmeOrganizer' => 'nullable:Reports,$id',
            'date' => 'nullable:Reports,$id',
            'venue' => 'nullable:Reports,$id',
            'localParticipant' => 'nullable:Reports,$id',
            'internationalParticipant' => 'nullable:Reports,$id',
            'outsiderParticipant' => 'nullable:Reports,$id',
            'accompanyingOfficer' => 'nullable:Reports,$id',
            'budgetSpent' => 'nullable:Reports,$id',
            'outsideSponsorship' => 'nullable:Reports,$id',
            'collaborations' => 'nullable:Reports,$id',
            'collaborations' => 'nullable:Reports,$id',
            'vipAttended' => 'nullable:Reports,$id',
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

        // $Report->sdgGoal1 = $request->input('sdgGoal1') ? true : false;

        if(empty($request->session()->get('Report'))){
            $Report = new \App\Models\Report();
            $Report->fill($validatedData);
            // $Report->sdgGoal1 = $request->has('sdgGoal1');
            // $Report->sdgGoal1 = $request->has('sdgGoal1');
            $request->session()->put('Report', $Report);
        }else{
            $Report = $request->session()->get('Report');
            $Report->fill($validatedData);
            $request->session()->put('Report', $Report);
        }
        
        return redirect('/report-create-step-2');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep2(Request $request)
    {
        $Report = $request->session()->get('Report');

        return view('report.step2',compact('Report'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'achievementsObservation' => 'nullable:Reports,$id',
            'shortcomings' => 'nullable:Reports,$id',
            'conclusion' => 'nullable:Reports,$id',
            'suggestions' => 'nullable:Reports,$id',
            
        ]);
        if(empty($request->session()->get('Report'))){
            $Report = new \App\Models\Report();
            $Report->fill($validatedData);
            $request->session()->put('Report', $Report);
        }else{
            $Report = $request->session()->get('Report');
            $Report->fill($validatedData);
            $request->session()->put('Report', $Report);
        }
        return redirect()->route('report.create.step.3');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep3(Request $request)
    {  
        $Report = $request->session()->get('Report');
        return view('Report.step3',compact('Report'));
    }

   /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            'file_path' => 'nullable:Reports,$id',
            'fileName' => 'nullable:Reports,$id',
            
        ]);
        if(empty($request->session()->get('Report'))){
            $Report = new \App\Models\Report();
            $Report->fill($validatedData);
            $request->session()->put('Report', $Report);
        }else{
            $Report = $request->session()->get('Report');
            $Report->fill($validatedData);
            $request->session()->put('Report', $Report);
        }
        return view('Report.step4',compact('Report'));
       }
        


    

   /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeImage(Request $request)
    {
        $Report = $request->session()->get('Report');

        $Report->file_path = null;

        return view('Report.step3',compact('Report'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $Report = $request->session()->get('Report');
        // $date= $request->input('date');
        Report::create($request->all());

        $Report->save();

        return redirect('/data');
    }
    
}

?>