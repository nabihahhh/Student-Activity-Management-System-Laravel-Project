@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) - VERIFY')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
            
            <div class="container p-4 max-w-screen-lg mx-auto pb-10 flex justify-center bg-gray-100" style=" "> <!--another box layering below form box -->
    <!-- <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto w-screen" style=" ">
        
  <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <form action="{{ route('verify.Form.Post', $Proposal->id)}}" method="POST">
        @csrf
        
  <!-- <div class="container p-4 shadow-md rounded-md text-left bg-gray-100" style="max-width: 83.333333%">
    <div class="p-4 shadow-md rounded-md text-left items-top bg-gray-50 flex-auto" style="max-width: max-content object-position: right"> -->
      <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME INFORMATION</th>
        </tr>
        <tr>
          <th>Programme Name </th>
          <td>{{$Proposal['programmeName']}}</td>
        </tr>
        <tr>
          <th>Programme Organizer </th>
          <td>{{$Proposal['programmeOrganizer']}}</td>
        </tr>
        <tr>
          <th>Programme Venue </th>
          <td>{{$Proposal['venue']}}</td>
        </tr>
        <tr>
          <th>Programme Date </th>
          <td>{{$Proposal['startDate']}} <b>
            <!-- to</b> {{$Proposal['endDate']}}</td> -->
        </tr>

        <tr>  
          <tr>
          <th>Types of Programme </th>
          <td>
          @if ( $Proposal->studentDrivenProgramme )
              <span style="">Student Driven Programme</span>
              @else 
              <span style="color:red"> </span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->departmentDrivenProgramme )
              <span style="">Department Driven Programme</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->invitationalProgramme)
              <span style="">Invitational Programme</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->jointProgramme )
              <span style="">Joint Programme</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->creditedProgramme)
              <span style="">Credited Programme</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>
          <th> </th>
          <td>{{$Proposal['othersProgramme']}}</td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PARTICIPATION</th>
        </tr>
        <tr>
          <th>Collaborations </th>
          <td>{{$Proposal['collaborations']}}</td>
        </tr>
        <tr>
          <th>Kull./Dept./Unit In Charge </th>
          <td>{{$Proposal['kullDeptUnitInCharge']}}</td>
        </tr>
        <tr>
          <th>Society/Club/Association </th>
          <td>{{$Proposal['societyClubAssociation']}}</td>
        </tr>
        <tr>  
          <tr>

          <th>Types of Activity </th>
          <td>
          @if ( $Proposal->participationActivity )
              <td style="">Participation Activity</td>
              @else 
              <td style="color:red"></td>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->competitionActivity)
              <span style="">Competition Activity</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th>Level of Activity </th>
          <td>
          @if ( $Proposal->universityLevel)
              <span style="">University Level</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->nationalLevel)
              <span style="">National Level</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->InternationalLevel)
              <span style="">International Level</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->societyDepartmentLevel)
              <span style="">Society/Department Level</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>

        <tr>  
          <tr>
          <th> </th>
          <td>
          @if ( $Proposal->compulsoryProgrammeLevel)
              <span style="">Compulsory Programme Level</span>
              @else 
              <span style="color:red"></span>
              @endif 
          </td>
        </tr>


        <tr>
          <th>Expected Number of Participants</th>
          <td><b>Local : </b>{{$Proposal['localParticipant']}}</td>
          <td><b>International :</b>{{$Proposal['internationalParticipant']}}</td>
        </tr>
        <!-- <tr>
          <td>&nbsp;</td>
          <td><b>International :</b>{{$Proposal['internationalParticipant']}}</td>
        </tr> -->
        <tr>
          <th>Variation of Activity </th>
          <td>{{$Proposal['activityVariation']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME VALUES</th>
        </tr>
        <tr>
          <th>SDG Goals </th>
          <td>{{$Proposal['sdgGoal']}}</td>
        </tr>
        <tr>
          <th>Maqasid Shariah </th>
          <td>{{$Proposal['maqasidShariah']}}</td>
        </tr>
        <tr>
          <th>Mission of IIUM </th>
          <td>{{$Proposal['missionOfIium']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md" colspan="1">STUDENT IN CHARGE</th>
        </tr>
        <tr>
          <th>Programme Manager (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$Proposal['PMName']}}</td>
          <td>{{$Proposal['PMMatric']}}</td>
          <td>{{$Proposal['PMPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Secretary (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$Proposal['SecretaryName']}}</td>
          <td>{{$Proposal['SecretaryMatric']}}</td>
          <td>{{$Proposal['SecretaryPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Treasurer (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$Proposal['TreasurerName']}}</td>
          <td>{{$Proposal['TreasurerMatric']}}</td>
          <td>{{$Proposal['TreasurerPhone']}}</td>
        </tr>
        <tr>
          <th>President of Association/Club/Society (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$Proposal['PresidentName']}}</td>
          <td>{{$Proposal['PresidentMatric']}}</td>
          <td>{{$Proposal['PresidentPhone']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">FINANCIAL REQUIREMENTS</th>
        </tr>
        <tr>
          <th>Balance of Budget Available</th>
          <td>{{$Proposal['budgetBalance']}}</td>
        </tr>
        <tr>
          <th>Budget Requested From</th>
          <td><b>STADD/CCSC/EDC/SDC/</b></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>CENSERVE/IWON/CITRA : </b>{{$Proposal['budgetReqOrg']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Kulliyyah : </b>{{$Proposal['budgetReqKull']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Mahallah : </b>{{$Proposal['budgetReqMahallah']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Sponsors : </b>{{$Proposal['budgetReqSponsor']}}</td>
        </tr>
        <tr>
          <th>Total Budget</th>
          <td>{{$Proposal['totalBudget']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">TRANSPORTATION</th>
        </tr>
        <tr>
          <th>Type of Transportation</th>
          <td>{{$Proposal['transportType']}}</td>
        </tr>
        <tr>
          <th>Quantity</th>
          <td>{{$Proposal['transportQty']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPLICANT INFORMATION</th>
        </tr>
        <tr>
          <th>Applicant's Name</th>
          <td>{{$Proposal['applicantName']}}</td>
        </tr>
        <tr>
          <th>Applicant's Matric Number</th>
          <td>{{$Proposal['applicantMatric']}}</td>
        </tr>
        <tr>
          <th>Applicant's Phone Number</th>
          <td>{{$Proposal['applicantPhone']}}</td>
        </tr>
        <tr>
          <th>Applicant's Email</th>
          <td>{{$Proposal['applicantEmail']}}</td>
        </tr>
        <tr>
          <th>Applicant's Position in Programme</th>
          <td>{{$Proposal['applicantPosition']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPROVAL COMMITTEE</th>
        </tr>
        <tr>
          <th>Society/Kulliyyah/Dept.</th>
          <td>{{$Proposal['appCommitteeDept']}}</td>
        </tr>
        <tr>
          <th>Position</th>
          <td>{{$Proposal['appCommitteePosition']}}</td>
        </tr>
      </table>
    </div><br/>

        <div class="mb-3 pt-0 shadow-md rounded-md">
          <input type="text" name="verificationComment" placeholder="Enter your comments here..." autocomplete="off" class="px-3 py-4 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-base border-0 shadow outline-none focus:outline-none focus:ring w-full"/>
        </div>
        <div class="flex justify-end space-x-4">
            <button type="submit" name="action" class="btn btn-primary bg-red-500 hover:bg-red-700 text-white text-xs font-bold py-2 px-4 rounded" value="reject">
              Decline
          </button>

          <button type="submit" name="action" class="btn btn-primary bg-gray-400 hover:bg-gray-600 text-white text-xs font-bold py-2 px-4 rounded" value="KIV">
            Keep In View
        </button>

          <button type="submit" name="action" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded" value="accept">
              Accept
          </button>

        </div>
      </form>
    </div>

  </div>

@endsection
