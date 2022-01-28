@extends('layouts.app')

@section('content')

<head>
  <style>
    th{
      font-weight: 400;
    }
    .status{
      display: inline-block;
    }
  </style>
</head>

  
 

  
  <div class="container p-4 shadow-md rounded-md text-left bg-gray-100" style="max-width: 83.333333%">
    <div class="p-4 shadow-md rounded-md text-left items-top bg-gray-50 flex-auto" style="max-width: max-content object-position: right">


            <div class="status py-3 px-6 text-left whitespace-nowrap">
              @if ($proposal->status_id === 14)
                  <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Status: Approved</span>
                  
              @elseif ($proposal->status_id === 15)
                  <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Status: Rejected</span>
              @else
                  <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Status: Pending approvals</span>
              @endif
            </div>
        
          
        @if ($proposal->status_id === 14)
            
            <a href="/ApplicantApproval/{{$proposal['id']}}" target="_blank" class=" btn btn-success bg-blue-600 hover:bg-blue-800 text-white text-xs font-bold py-2 px-4 rounded text-right">View Approval Letter</a>
        @endif
        <br><br>

      <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME INFORMATION</th>
        </tr>
       
        <tr>
          <th>Programme Name </th>
          <td>{{$proposal['programmeName']}}</td>
        </tr>
        <tr>
          <th>Programme Organizer </th>
          <td>{{$proposal['programmeOrganizer']}}</td>
        </tr>
        <tr>
          <th>Programme Venue </th>
          <td>{{$proposal['programmeVenue']}}</td>
        </tr>
        <tr>
          <th>Programme Date </th>
          <td>{{$proposal['startDate']}} <b>to</b> {{$proposal['endDate']}}</td>
        </tr>
        <tr>
          <th>Types of Programme </th>
          <td>{{$proposal['programmeType']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PARTICIPATION</th>
        </tr>
        <tr>
          <th>Collaborations </th>
          <td>{{$proposal['collaborations']}}</td>
        </tr>
        <tr>
          <th>Kull./Dept./Unit In Charge </th>
          <td>{{$proposal['in-charge']}}</td>
        </tr>
        <tr>
          <th>Society/Club/Association </th>
          <td>{{$proposal['soc_club_assoc']}}</td>
        </tr>
        <tr>
          <th>Type of Activity </th>
          <td>{{$proposal['activityType']}}</td>
        </tr>
        <tr>
          <th>Level of Activity </th>
          <td>{{$proposal['activityLevel']}}</td>
        </tr>
        <tr>
          <th>Expected Number of Participants</th>
          <td><b>Local : </b>{{$proposal['localParticipant']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><b>International :</b>{{$proposal['internationalParticipant']}}</td>
        </tr>
        <tr>
          <th>Variation of Activity </th>
          <td>{{$proposal['activityVariation']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME VALUES</th>
        </tr>
        <tr>
          <th>SDG Goals </th>
          <td>{{$proposal['sdgGoal']}}</td>
        </tr>
        <tr>
          <th>Maqasid Shariah </th>
          <td>{{$proposal['maqasidShariah']}}</td>
        </tr>
        <tr>
          <th>Mission of IIUM </th>
          <td>{{$proposal['missionOfIium']}}</td>
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
          <td>{{$proposal['PMName']}}</td>
          <td>{{$proposal['PMMatric']}}</td>
          <td>{{$proposal['PMPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Secretary (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$proposal['SecretaryName']}}</td>
          <td>{{$proposal['SecretaryMatric']}}</td>
          <td>{{$proposal['SecretaryPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Treasurer (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$proposal['TreasurerName']}}</td>
          <td>{{$proposal['TreasurerMatric']}}</td>
          <td>{{$proposal['TreasurerPhone']}}</td>
        </tr>
        <tr>
          <th>President of Association/Club/Society (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$proposal['PresidentName']}}</td>
          <td>{{$proposal['PresidentMatric']}}</td>
          <td>{{$proposal['PresidentPhone']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">FINANCIAL REQUIREMENTS</th>
        </tr>
        <tr>
          <th>Balance of Budget Available</th>
          <td>{{$proposal['budgetBalance']}}</td>
        </tr>
        <tr>
          <th>Budget Requested From</th>
          <td><b>STADD/CCSC/EDC/SDC/</b></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>CENSERVE/IWON/CITRA : </b>{{$proposal['budgetReqOrg']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Kulliyyah : </b>{{$proposal['budgetReqKull']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Mahallah : </b>{{$proposal['budgetReqMahallah']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Sponsors : </b>{{$proposal['budgetReqSponsor']}}</td>
        </tr>
        <tr>
          <th>Total Budget</th>
          <td>{{$proposal['totalBudget']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">TRANSPORTATION</th>
        </tr>
        <tr>
          <th>Type of Transportation</th>
          <td>{{$proposal['transportType']}}</td>
        </tr>
        <tr>
          <th>Quantity</th>
          <td>{{$proposal['transportQty']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPLICANT INFORMATION</th>
        </tr>
        <tr>
          <th>Applicant's Name</th>
          <td>{{$proposal['applicantName']}}</td>
        </tr>
        <tr>
          <th>Applicant's Matric Number</th>
          <td>{{$proposal['applicantMatric']}}</td>
        </tr>
        <tr>
          <th>Applicant's Phone Number</th>
          <td>{{$proposal['applicantPhone']}}</td>
        </tr>
        <tr>
          <th>Applicant's Email</th>
          <td>{{$proposal['applicantEmail']}}</td>
        </tr>
        <tr>
          <th>Applicant's Position in Programme</th>
          <td>{{$proposal['applicantPosition']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPROVAL COMMITTEE</th>
        </tr>
        <tr>
          <th>Society/Kulliyyah/Dept.</th>
          <td>{{$proposal['appCommitteeDept']}}</td>
        </tr>
        <tr>
          <th>Position</th>
          <td>{{$proposal['appCommitteePosition']}}</td>
        </tr>
      </table>
    </div><br/>

  </div>

@endsection