@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Programme Proposal Form (PPF) - Review Details')
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>


           

<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center  " >

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">
                <form action="{{ route('store1') }}" method="post" enctype="multipart/form-data" class="w-max" >
                    {{ csrf_field() }}
                    
                    <tr ><div class="flex -mr-px ">
                            <td ><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME DETAILS
                            </span>  </td>
                            </div>
                        </tr>
                        <br>
                    
                        <tr>
                            <td><strong>Programme Name:</strong></td>
                            <td>{{$Proposal->programmeName}}</td>
                        </tr><br>

                        <tr>
                            <td><strong>Organizer:</strong></td>
                            <td>{{$Proposal->programmeOrganizer}}</td>
                        </tr><br>
                        <tr>
                            <td><strong>Venue:</strong></td>
                            <td>{{$Proposal->venue}}</td>
                        </tr><br>
                        
                        <tr>
                            <td><strong>Date:</strong></td>
                            <td>{{$Proposal->date}}</td>
                        </tr><br><br>
                        
                        <tr>
                            
                            <td><strong>Expected Number of Participant(s)</strong></td>
                        </tr><br>
                        <tr>
                            <td>Local Participant :</td>
                            <td><strong>{{$Proposal->localParticipant }}</strong></td>
                        </tr><br>
                        <tr>
                            <td>International Participant :</td>
                            <td><strong>{{$Proposal->InternationalParticipant }}</strong></td>
                        </tr><br><br>

                        <tr>
                            <td><strong>Collaborations:</strong></td>
                            <td>{{$Proposal->collaborations}}</td>
                        </tr><br><br>
                        <tr>
                        <div class="flex -mr-px ">
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TYPES OF PROGRAMME
                            </span> </td></div><br>
                        
                           
                            <td>
                                @if ($Proposal->studentDrivenProgramme == 1)
                                    <p>Student Driven Programme</p>  
                                @endif
                                @if ($Proposal->departmentDrivenProgramme == 1)
                                    <p>Department Driven Programme</p>
                                    @endif
                                @if ($Proposal->invitationalProgramme == 1)
                                    <p>Invitational Programme</p>  
                                    @endif
                                @if ($Proposal->jointProgramme == 1)
                                    <p>Joint Programme</p> 
                                    @endif
                                @if ($Proposal->creditedProgramme  == 1)
                                    <p>Credited Programme</p> 
                                    @endif
                                

                                <strong>{{$Proposal->othersProgramme}}</strong>
                            </td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               KULL./DEPT./UNIT IN-CHARGE
                            </span></div> <br>
                        
                            <td><p>{{$Proposal->kullDeptUnitInCharge}}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SOCIETY/CLUB/ASSOCIATION
                            </span></div> <br>
                            <td><p>{{$Proposal->societyClubAssociation }}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TYPE OF ACTIVITY
                            </span></div><br>
                            <td>
                                @if ($Proposal->participationActivity == 1)
                                    <p>Participation Activity</p>  
                                    @endif
                                @if ($Proposal->competitionActivity  == 1)
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
                                @if ($Proposal-> universityLevel  == 1)
                                    <p>University Level </p>  
                                    @endif
                                @if ($Proposal->nationalLevel   == 1)
                                    <p>National Activity </p>  @endif

                                @if ($Proposal->InternationalLevel == 1)
                                    <p>International Level</p> @endif

                                @if ($Proposal->societyDepartmentLevel == 1)
                                    <p>Society/Department Level</p> @endif

                                @if ($Proposal->compulsoryProgrammeLevel == 1)
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
                                @if ($Proposal-> attendingCeremonyActivity  == 1)
                                    <p>Attending Ceremony </p>  @endif
                                @if ($Proposal->bullettinNewsletterActivity   == 1)
                                    <p>Bulletin/Newsletter </p> @endif 
                                @if ($Proposal->communityServiceActivity == 1)
                                    <p>Community Service</p> @endif
                                @if ($Proposal->counselingActivity == 1)
                                    <p>Counseling</p> @endif
                                @if ($Proposal->promotionBoothActivity == 1)
                                    <p>Promotion/Booth</p> @endif

                                @if ($Proposal-> culturalActivity == 1)
                                    <p>Cultural </p>  @endif
                                @if ($Proposal->debateActivity   == 1)
                                    <p>Debate </p>  @endif
                                @if ($Proposal->educationalTripActivity == 1)
                                    <p>Educational Trip</p> @endif
                                @if ($Proposal->entrepreneurshipActivity == 1)
                                    <p>Entrepreneurship</p> @endif
                                @if ($Proposal->annualGrandMeetingActivity == 1)
                                    <p>Annual Grand Meeting</p> @endif

                                @if ($Proposal-> intellectualActivity  == 1)
                                    <p>Intellectual </p>  @endif
                                @if ($Proposal->leadershipActivity   == 1)
                                    <p>Leadership </p>  @endif
                                @if ($Proposal->recreationalActivity == 1)
                                    <p>Recreational</p> @endif
                                @if ($Proposal->socialGatheringActivity == 1)
                                    <p>Social Gathering</p>@endif
                                @if ($Proposal->seminarConferenceActivity == 1)
                                    <p>Seminar Conference</p> @endif
 
                                @if ($Proposal->spiritualActivity   == 1)
                                    <p>Spiritual </p>  @endif
                                @if ($Proposal->sportActivity == 1)
                                    <p>Sports</p> @endif
                                @if ($Proposal->trainingActivity == 1)
                                    <p>Training</p> @endif
                                @if ($Proposal->uniformBodiesActivity == 1)
                                    <p>Uniform Bodies</p> 
                                @endif
                            </td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SDG GOALS
                            </span></div><br>
                        @if ($Proposal->sdgGoal1 == 1) 
                            <td><p>No Poverty</p></td>
                         @endif
                        </tr>
                        
                        @if ($Proposal->sdgGoal2 == 1)
                        <tr>
                            
                            <td><p>Zero Hunger</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal3 == 1)
                        <tr>
                            
                            <td><p>Good Health & Wellbeing</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal4 == 1)
                        <tr>
                           
                            <td><p>Quality Education</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal5 == 1)
                        <tr>
                            
                            <td><p>Gender Equality</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal6 == 1)
                        <tr>
                            
                            <td><p>Clean Water & Sanitation</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal7 == 1)
                        <tr>
                           
                            <td><p>Affordable & Clean Energy</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal8 == 1)
                        <tr>
                            
                            <td><p>Decent Work & Economic Growth</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal9 == 1)
                        <tr>
                            
                            <td><p>Industry, Innovation & Infrastructure</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal10 == 1)
                        <tr>
                            
                            <td><p> Reduce</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal11 == 1)
                        <tr>
                            
                            <td><p>Sustainable Cities & Communities</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal12 == 1)
                        <tr>
                           
                            <td><p>Responsible Consumption & Production</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal13 == 1)
                        <tr>
                           
                            <td><p>Climate Action</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal14 == 1)
                        <tr>
                           
                            <td><p> Life Below Water</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal15 == 1)
                        <tr>
                           
                            <td><p>Life on Land</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal16 == 1)
                        <tr>
                           
                            <td><p>Peace, Justice & p Instituations</p></td>
                        </tr>
                        @endif
                        @if ($Proposal->sdgGoal17 == 1)
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
                                @if ($Proposal-> maqasidShariahFaith  == 1)
                                    <p>Faith </p>  @endif
                                @if ($Proposal->maqasidShariahLife   == 1)
                                    <p>Life</p> @endif 
                                @if ($Proposal->maqasidShariahIntellect  == 1)
                                    <p>Intellect</p> @endif
                                @if ($Proposal->maqasidShariahWealth == 1)
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
                                @if ($Proposal->missionOfIiumIslamization  == 1)
                                    <p>Islamization</p>@endif  
                                @if ($Proposal->missionOfIiumInternationalization   == 1)
                                    <p>Internationalization</p>  @endif
                                @if ($Proposal->missionOfIiumIntegration  == 1)
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
                            <td>{{$Proposal->programmeManagerName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$Proposal-> programmeManagerMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$Proposal->programmeManagerPhoneNo}}</td>
                        </tr><br><br>
                        <tr>
                        <td><strong>Programme Secretary</strong></td><br>
                        <td>Name:</td>
                            <td>{{$Proposal->programmeSecretaryName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$Proposal-> programmeSecretaryMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$Proposal->programmeSecretaryPhoneNo}}</td><br><br>
                       
                            </tr><tr>
                        <td><strong>Programme Treasurer</strong></td><br>
                        <td>Name:</td>
                            <td>{{$Proposal->programmeTreasurerName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$Proposal-> programmeTreasurerMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$Proposal->programmeTreasurerPhoneNo}}</td>
                            </tr><tr><br><br>
                        <td><strong>Pesident of Association/Club/Society</strong></td><br>
                        <td>Name:</td>
                            <td>{{$Proposal->presidentClubSocietyName}}</td><br>
                        <td>Matric no:</td>
                            <td>{{$Proposal-> presidentClubSocietyMatricNo }}</td><br>
                        <td>Phone no:</td>
                            <td>{{$Proposal->presidentClubSocietyPhoneNo}}</td>
                            </tr><tr><br><br>
                            
                            <div class="flex -mr-px ">
                            <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               UNDERTAKING
                            </span></div> </td><br>
                            <td>
                                <p>I hereby certify that the above information given are true and correct as to the best of my knowledge.  </p> 
                                
                                
                                <p>{{$Proposal->programmeManagerName}},</p>
                                <p><strong>Programme Manager</strong></p> 
                                <p><strong>{{$Proposal->date}}</strong></p> 
                            </td>
                        </tr><br>

                        
                        <div class="flex -mr-px ">
                        <tr>
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               FINANCIAL REQUIREMENT
                            </span></div> </td><br>
                            <td><strong> Balance of Budget Available: </td></strong>
                            <td>{{$Proposal->balanceBudget }}</td><br><br>

                            <td><strong> Budget Requested From </td></strong><br>
                            <td>STADD/CCSC/EDC/SDC/CENSERVE/IWON/CITRA: </td>
                            <td>{{$Proposal->budgetRequestedFromSTADDToCitra}}</td><br>

                            <td>Mahallah: </td>
                            <td>{{$Proposal->budgetRequestedFromMahallah}}</td><br>

                            <td>Kuliyyah: </td>
                            <td>{{$Proposal->budgetRequestedFromKuliyyah }}</td><br>

                            <td>Sponsors: </td>
                            <td>{{$Proposal->budgetRequestedFromSponsors}}</td><br><br>

                        </tr>
                        <div class="flex -mr-px ">
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               TRANSPORTATION
                            </span></div> </td><br>

                            <td><strong> Type: </strong></td>
                            <td>{{$Proposal->typeTransportation }}</td><br>

                            <td><strong> Quantity: </td></strong>
                            <td>{{$Proposal->quantityTransportation}}</td><br>

                        </tr><br><br>


                         
                   

                   

                            <div class="flex justify-end space-x-4">
                                 <a href="{{route('dashboard') }}"  class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                            </a>
                                <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                                    Submit
                                </button>
                            </div>

                            <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('proposal.create.step.5') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back
                                </a>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

