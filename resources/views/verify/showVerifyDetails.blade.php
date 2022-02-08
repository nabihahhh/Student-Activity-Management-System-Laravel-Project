@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Programme proposal Form (PPF) - View status')
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>


            

           
        
          
        


<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center " >

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">

    <div class="status py-3 px-3 text-left ">
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
        <br><br><br>
                <form action="{{ route('store1') }}" method="post" enctype="multipart/form-data" class="w-max" >
                    {{ csrf_field() }}
                    <!-- <table class="table table-bordered border-black"> -->
                    <tr ><div class="flex -mr-px ">
                            <td ><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME DETAILS
                            </span>  </td>
                            </div>
                        </tr>
                        <br>
                    
                        <tr>
                            <td><strong>Programme Name:</strong></td>
                            <td>{{$proposal->programmeName}}</td>
                        </tr><br>

                        <tr>
                            <td><strong>Organizer:</strong></td>
                            <td>{{$proposal->programmeOrganizer}}</td>
                        </tr><br>
                        <tr>
                            <td><strong>Venue:</strong></td>
                            <td>{{$proposal->venue}}</td>
                        </tr><br>
                        
                        <tr>
                            <td><strong>Date:</strong></td>
                            <td>{{$proposal->date}}</td>
                        </tr><br><br>
                        
                        <tr>
                            
                            <td><strong>Expected Number of Participant(s)</strong></td>
                        </tr><br>
                        <tr>
                            <td>Local Participant :</td>
                            <td><strong>{{$proposal->localParticipant }}</strong></td>
                        </tr><br>
                        <tr>
                            <td>International Participant :</td>
                            <td><strong>{{$proposal->InternationalParticipant }}</strong></td>
                        </tr><br><br>

                        <tr>
                            <td><strong>Collaborations:</strong></td>
                            <td>{{$proposal->collaborations}}</td>
                        </tr><br><br>
                        <tr>
                        <div class="flex -mr-px ">
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TYPES OF PROGRAMME
                            </span> </td></div><br>
                        
                           
                            <td>
                                @if ($proposal->studentDrivenProgramme == 1)
                                    <p>Student Driven Programme</p>  
                                @endif
                                @if ($proposal->departmentDrivenProgramme == 1)
                                    <p>Department Driven Programme</p>
                                    @endif
                                @if ($proposal->invitationalProgramme == 1)
                                    <p>Invitational Programme</p>  
                                    @endif
                                @if ($proposal->jointProgramme == 1)
                                    <p>Joint Programme</p> 
                                    @endif
                                @if ($proposal->creditedProgramme  == 1)
                                    <p>Credited Programme</p> 
                                    @endif
                                

                                <strong>{{$proposal->othersProgramme}}</strong>
                            </td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               KULL./DEPT./UNIT IN-CHARGE
                            </span></div> <br>
                        
                            <td><p>{{$proposal->kullDeptUnitInCharge}}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SOCIETY/CLUB/ASSOCIATION
                            </span></div> <br>
                            <td><p>{{$proposal->societyClubAssociation }}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TYPE OF ACTIVITY
                            </span></div><br>
                            <td>
                                @if ($proposal->participationActivity == 1)
                                    <p>Participation Activity</p>  
                                    @endif
                                @if ($proposal->competitionActivity  == 1)
                                    <p>Competition Activity </p>  
                                    @endif
                            </td>
                            </tr><br>
                            <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               LEVEL OF ACTIVITY 
                            </span></div> <br>
                            <td>
                                @if ($proposal-> universityLevel  == 1)
                                    <p>University Level </p>  
                                    @endif
                                @if ($proposal->nationalLevel   == 1)
                                    <p>National Activity </p>  @endif

                                @if ($proposal->InternationalLevel == 1)
                                    <p>International Level</p> @endif

                                @if ($proposal->societyDepartmentLevel == 1)
                                    <p>Society/Department Level</p> @endif

                                @if ($proposal->compulsoryProgrammeLevel == 1)
                                    <p>Compulsory Programme Level</p> 
                                @endif
                            </td>
                        </tr><br><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               VARIATION OF ACTIVITY 
                            </span></div><br>
                            <td>
                                @if ($proposal-> attendingCeremonyActivity  == 1)
                                    <p>Attending Ceremony </p>  @endif
                                @if ($proposal->bullettinNewsletterActivity   == 1)
                                    <p>Bulletin/Newsletter </p> @endif 
                                @if ($proposal->communityServiceActivity == 1)
                                    <p>Community Service</p> @endif
                                @if ($proposal->counselingActivity == 1)
                                    <p>Counseling</p> @endif
                                @if ($proposal->promotionBoothActivity == 1)
                                    <p>Promotion/Booth</p> @endif

                                @if ($proposal-> culturalActivity == 1)
                                    <p>Cultural </p>  @endif
                                @if ($proposal->debateActivity   == 1)
                                    <p>Debate </p>  @endif
                                @if ($proposal->educationalTripActivity == 1)
                                    <p>Educational Trip</p> @endif
                                @if ($proposal->entrepreneurshipActivity == 1)
                                    <p>Entrepreneurship</p> @endif
                                @if ($proposal->annualGrandMeetingActivity == 1)
                                    <p>Annual Grand Meeting</p> @endif

                                @if ($proposal-> intellectualActivity  == 1)
                                    <p>Intellectual </p>  @endif
                                @if ($proposal->leadershipActivity   == 1)
                                    <p>Leadership </p>  @endif
                                @if ($proposal->recreationalActivity == 1)
                                    <p>Recreational</p> @endif
                                @if ($proposal->socialGatheringActivity == 1)
                                    <p>Social Gathering</p>@endif
                                @if ($proposal->seminarConferenceActivity == 1)
                                    <p>Seminar Conference</p> @endif
 
                                @if ($proposal->spiritualActivity   == 1)
                                    <p>Spiritual </p>  @endif
                                @if ($proposal->sportActivity == 1)
                                    <p>Sports</p> @endif
                                @if ($proposal->trainingActivity == 1)
                                    <p>Training</p> @endif
                                @if ($proposal->uniformBodiesActivity == 1)
                                    <p>Uniform Bodies</p> 
                                @endif
                            </td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SDG GOALS
                            </span></div><br>
                        @if ($proposal->sdgGoal1 == 1) 
                            <td><p>No Poverty</p></td>
                         @endif
                        </tr>
                        
                        @if ($proposal->sdgGoal2 == 1)
                        <tr>
                            
                            <td><p>Zero Hunger</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal3 == 1)
                        <tr>
                            
                            <td><p>Good Health & Wellbeing</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal4 == 1)
                        <tr>
                           
                            <td><p>Quality Education</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal5 == 1)
                        <tr>
                            
                            <td><p>Gender Equality</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal6 == 1)
                        <tr>
                            
                            <td><p>Clean Water & Sanitation</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal7 == 1)
                        <tr>
                           
                            <td><p>Affordable & Clean Energy</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal8 == 1)
                        <tr>
                            
                            <td><p>Decent Work & Economic Growth</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal9 == 1)
                        <tr>
                            
                            <td><p>Industry, Innovation & Infrastructure</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal10 == 1)
                        <tr>
                            
                            <td><p> Reduce</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal11 == 1)
                        <tr>
                            
                            <td><p>Sustainable Cities & Communities</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal12 == 1)
                        <tr>
                           
                            <td><p>Responsible Consumption & Production</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal13 == 1)
                        <tr>
                           
                            <td><p>Climate Action</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal14 == 1)
                        <tr>
                           
                            <td><p> Life Below Water</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal15 == 1)
                        <tr>
                           
                            <td><p>Life on Land</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal16 == 1)
                        <tr>
                           
                            <td><p>Peace, Justice & p Instituations</p></td>
                        </tr>
                        @endif
                        @if ($proposal->sdgGoal17 == 1)
                        <tr>
                            
                            <td><p>Partnership for the goals</p></td>
                        </tr> 
                        @endif
                        <br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               MAQASID SHARIAH
                            </span></div><br>
                            <td>
                                @if ($proposal-> maqasidShariahFaith  == 1)
                                    <p>Faith </p>  @endif
                                @if ($proposal->maqasidShariahLife   == 1)
                                    <p>Life</p> @endif 
                                @if ($proposal->maqasidShariahIntellect  == 1)
                                    <p>Intellect</p> @endif
                                @if ($proposal->maqasidShariahWealth == 1)
                                    <p>Wealth</p> 
                                @endif
                            </td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               MISSION OF IIUM 
                            </span></div><br>
                            <td>
                                @if ($proposal->missionOfIiumIslamization  == 1)
                                    <p>Islamization</p>@endif  
                                @if ($proposal->missionOfIiumInternationalization   == 1)
                                    <p>Internationalization</p>  @endif
                                @if ($proposal->missionOfIiumIntegration  == 1)
                                    <p>Integration</p> 
                                @endif
                            </td>
                        </tr><br><br>

                        
                        <div class="flex -mr-px ">
                        <tr>
                            <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               STUDENT-IN-CHARGE
                            </span> </div></td><br>
                        

                        <td><strong>Programme Manager</strong></td><br>
                        <td>Name:</td>
                            <td>{{$proposal->programmeManagerName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$proposal-> programmeManagerMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$proposal->programmeManagerPhoneNo}}</td>
                        </tr><br><br>
                        <tr>
                        <td><strong>Programme Secretary</strong></td><br>
                        <td>Name:</td>
                            <td>{{$proposal->programmeSecretaryName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$proposal-> programmeSecretaryMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$proposal->programmeSecretaryPhoneNo}}</td><br><br>
                       
                            </tr><tr>
                        <td><strong>Programme Treasurer</strong></td><br>
                        <td>Name:</td>
                            <td>{{$proposal->programmeTreasurerName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$proposal-> programmeTreasurerMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$proposal->programmeTreasurerPhoneNo}}</td>
                            </tr><tr><br><br>
                        <td><strong>Pesident of Association/Club/Society</strong></td><br>
                        <td>Name:</td>
                            <td>{{$proposal->presidentClubSocietyName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$proposal-> presidentClubSocietyMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$proposal->presidentClubSocietyPhoneNo}}</td>
                            </tr><tr><br><br>
                            
                            <div class="flex -mr-px ">
                            <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               UNDERTAKING
                            </span></div> </td><br>
                            <td>
                                <p>I hereby certify that the above information given are true and correct as to the best of my knowledge.  </p> 
                                
                                
                                <p>{{$proposal->programmeManagerName}},</p>
                                <p><strong>Programme Manager</strong></p> 
                                <p><strong>{{$proposal->date}}</strong></p> 
                            </td>
                        </tr><br>

                        
                        <div class="flex -mr-px ">
                        <tr>
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               FINANCIAL REQUIREMENT
                            </span></div> </td><br>
                            <td><strong> Balance of Budget Available: </td></strong>
                            <td>{{$proposal->balanceBudget }}</td><br><br>

                            <td><strong> Budget Requested From </td></strong><br>
                            <td>STADD/CCSC/EDC/SDC/CENSERVE/IWON/CITRA: </td>
                            <td>{{$proposal->budgetRequestedFromSTADDToCitra}}</td><br>

                            <td>Mahallah: </td>
                            <td>{{$proposal->budgetRequestedFromMahallah}}</td><br>

                            <td>Kuliyyah: </td>
                            <td>{{$proposal->budgetRequestedFromKuliyyah }}</td><br>

                            <td>Sponsors: </td>
                            <td>{{$proposal->budgetRequestedFromSponsors}}</td><br><br>

                        </tr>
                        <div class="flex -mr-px ">
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TRANSPORTATION
                            </span></div> </td><br>

                            <td><strong> Type: </strong></td>
                            <td>{{$proposal->typeTransportation }}</td><br>

                            <td><strong> Quantity: </td></strong>
                            <td>{{$proposal->quantityTransportation}}</td><br>

                        </tr><br>


                         
                    <!-- </table> -->

        

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

