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

  <p class="status text-left text-gray-600 text-base font-light"><b>Status :</b>
    <div class="status py-3 px-6 text-left whitespace-nowrap">
      @if ($verify->programmeStatus === 'Accept')
          <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Accepted</span>
          <a href="/ApplicantApproval/{{$verify['id']}}" target="_blank" class="btn btn-success bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded text-right">View Approval Letter</a>
      @elseif ($verify->programmeStatus === 'Pending')
          <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Pending</span>
      @else
          <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Rejected</span>
      @endif
    </div>
  </p>

  <br/>
  <div class="container p-4 shadow-md rounded-md text-left bg-gray-100" style="max-width: 83.333333%">
    <div class="p-4 shadow-md rounded-md text-left items-top bg-gray-50 flex-auto" style="max-width: max-content object-position: right">

      <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME INFORMATION</th>
        </tr>
        <tr>
          <th>Programme Name </th>
          <td>{{$verify['programmeName']}}</td>
        </tr>
        <tr>
          <th>Programme Organizer </th>
          <td>{{$verify['programmeOrganizer']}}</td>
        </tr>
        <tr>
          <th>Programme Venue </th>
          <td>{{$verify['programmeVenue']}}</td>
        </tr>
        <tr>
          <th>Programme Date </th>
          <td>{{$verify['startDate']}} <b>to</b> {{$verify['endDate']}}</td>
        </tr>
        <tr>
          <th>Types of Programme </th>
          <td>{{$verify['programmeType']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PARTICIPATION</th>
        </tr>
        <tr>
          <th>Collaborations </th>
          <td>{{$verify['collaborations']}}</td>
        </tr>
        <tr>
          <th>Kull./Dept./Unit In Charge </th>
          <td>{{$verify['in-charge']}}</td>
        </tr>
        <tr>
          <th>Society/Club/Association </th>
          <td>{{$verify['soc_club_assoc']}}</td>
        </tr>
        <tr>
          <th>Type of Activity </th>
          <td>{{$verify['activityType']}}</td>
        </tr>
        <tr>
          <th>Level of Activity </th>
          <td>{{$verify['activityLevel']}}</td>
        </tr>
        <tr>
          <th>Expected Number of Participants</th>
          <td><b>Local : </b>{{$verify['localParticipant']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><b>International :</b>{{$verify['internationalParticipant']}}</td>
        </tr>
        <tr>
          <th>Variation of Activity </th>
          <td>{{$verify['activityVariation']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROGRAMME VALUES</th>
        </tr>
        <tr>
          <th>SDG Goals </th>
          <td>{{$verify['sdgGoal']}}</td>
        </tr>
        <tr>
          <th>Maqasid Shariah </th>
          <td>{{$verify['maqasidShariah']}}</td>
        </tr>
        <tr>
          <th>Mission of IIUM </th>
          <td>{{$verify['missionOfIium']}}</td>
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
          <td>{{$verify['PMName']}}</td>
          <td>{{$verify['PMMatric']}}</td>
          <td>{{$verify['PMPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Secretary (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$verify['SecretaryName']}}</td>
          <td>{{$verify['SecretaryMatric']}}</td>
          <td>{{$verify['SecretaryPhone']}}</td>
        </tr>
        <tr>
          <th>Programme Treasurer (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$verify['TreasurerName']}}</td>
          <td>{{$verify['TreasurerMatric']}}</td>
          <td>{{$verify['TreasurerPhone']}}</td>
        </tr>
        <tr>
          <th>President of Association/Club/Society (Name/Matric No./Phone Number)</th>
        </tr>
        <tr>
          <td>{{$verify['PresidentName']}}</td>
          <td>{{$verify['PresidentMatric']}}</td>
          <td>{{$verify['PresidentPhone']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">FINANCIAL REQUIREMENTS</th>
        </tr>
        <tr>
          <th>Balance of Budget Available</th>
          <td>{{$verify['budgetBalance']}}</td>
        </tr>
        <tr>
          <th>Budget Requested From</th>
          <td><b>STADD/CCSC/EDC/SDC/</b></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>CENSERVE/IWON/CITRA : </b>{{$verify['budgetReqOrg']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Kulliyyah : </b>{{$verify['budgetReqKull']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Mahallah : </b>{{$verify['budgetReqMahallah']}}</td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td><b>Sponsors : </b>{{$verify['budgetReqSponsor']}}</td>
        </tr>
        <tr>
          <th>Total Budget</th>
          <td>{{$verify['totalBudget']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">TRANSPORTATION</th>
        </tr>
        <tr>
          <th>Type of Transportation</th>
          <td>{{$verify['transportType']}}</td>
        </tr>
        <tr>
          <th>Quantity</th>
          <td>{{$verify['transportQty']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPLICANT INFORMATION</th>
        </tr>
        <tr>
          <th>Applicant's Name</th>
          <td>{{$verify['applicantName']}}</td>
        </tr>
        <tr>
          <th>Applicant's Matric Number</th>
          <td>{{$verify['applicantMatric']}}</td>
        </tr>
        <tr>
          <th>Applicant's Phone Number</th>
          <td>{{$verify['applicantPhone']}}</td>
        </tr>
        <tr>
          <th>Applicant's Email</th>
          <td>{{$verify['applicantEmail']}}</td>
        </tr>
        <tr>
          <th>Applicant's Position in Programme</th>
          <td>{{$verify['applicantPosition']}}</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPROVAL COMMITTEE</th>
        </tr>
        <tr>
          <th>Society/Kulliyyah/Dept.</th>
          <td>{{$verify['appCommitteeDept']}}</td>
        </tr>
        <tr>
          <th>Position</th>
          <td>{{$verify['appCommitteePosition']}}</td>
        </tr>
      </table>
    </div><br/>

  </div>

@endsection