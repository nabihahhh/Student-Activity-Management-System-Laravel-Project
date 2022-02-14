@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Programme Reprt Form (PPF) - View status')
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>


            

           
        
          
        


<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center " >

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">

    <div class="status py-3 px-3 text-left ">
              @if ($report->status_id === 14)
                  <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Status: Approved</span>
                  
              @elseif ($report->status_id === 15)
                  <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Status: Rejected</span>
              @else
                  <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Status: Pending approvals</span>
              @endif
            </div>
        <br>
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
                            <td>{{$report->programmeName}}</td>
                        </tr><br>

                        <tr>
                            <td><strong>Organizer:</strong></td>
                            <td>{{$report->programmeOrganizer}}</td>
                        </tr><br>
                        <tr>
                            <td><strong>Venue:</strong></td>
                            <td>{{$report->venue}}</td>
                        </tr><br>
                        
                        <tr>
                            <td><strong>Date:</strong></td>
                            <td>{{$report->date}}</td>
                        </tr><br><br>
                        
                        <tr>
                            
                            <td><strong>Number of Participant(s)</strong></td>
                        </tr><br>
                        <tr>
                            <td>Local Participant :</td>
                            <td><strong>{{$report->localParticipant }}</strong></td>
                        </tr><br>
                        <tr>
                            <td>International Participant :</td>
                            <td><strong>{{$report->InternationalParticipant }}</strong></td>
                        </tr><br>
                        <tr>
                            <td>Outsider :</td>
                            <td><strong>{{$report->outsiderParticipant }}</strong></td>
                        </tr><br><br>

                        <tr>
                            <td><strong>Collaborations:</strong></td>
                            <td>{{$report->collaborations}}</td>
                        </tr><br><br>
                        
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               ACCOMPANYING OFFICER
                            </span></div> <br>
                        
                            <td><p>{{$report->accompanyingOfficer}}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               VIP ATTENDED
                            </span></div> <br>
                            <td><p>{{$report->vipAttended }}</p></td>
                        </tr><br>
                        <div class="flex -mr-px ">
                        <tr>
                        
                      
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               FINANCIAL INFORMATIONS 
                            </span></div><br>
                            
                            <td><strong>Budget Spent: </strong></td>
                            <td>RM{{$report->budgetSpent}}</td>
                        </tr><br>
                        
                        <tr>
                            <td><strong>Outside Sponsorship: </strong></td>
                            <td>RM{{$report->outsideSponsorship}}</td>
                       
                        </tr><br><br>
                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SDG GOALS
                            </span></div><br>
                        @if ($report->sdgGoal1 == 1) 
                            <td><p>No Poverty</p></td>
                         @endif
                        </tr>
                        
                        @if ($report->sdgGoal2 == 1)
                        <tr>
                            
                            <td><p>Zero Hunger</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal3 == 1)
                        <tr>
                            
                            <td><p>Good Health & Wellbeing</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal4 == 1)
                        <tr>
                           
                            <td><p>Quality Education</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal5 == 1)
                        <tr>
                            
                            <td><p>Gender Equality</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal6 == 1)
                        <tr>
                            
                            <td><p>Clean Water & Sanitation</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal7 == 1)
                        <tr>
                           
                            <td><p>Affordable & Clean Energy</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal8 == 1)
                        <tr>
                            
                            <td><p>Decent Work & Economic Growth</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal9 == 1)
                        <tr>
                            
                            <td><p>Industry, Innovation & Infrastructure</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal10 == 1)
                        <tr>
                            
                            <td><p> Reduce</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal11 == 1)
                        <tr>
                            
                            <td><p>Sustainable Cities & Communities</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal12 == 1)
                        <tr>
                           
                            <td><p>Responsible Consumption & Production</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal13 == 1)
                        <tr>
                           
                            <td><p>Climate Action</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal14 == 1)
                        <tr>
                           
                            <td><p> Life Below Water</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal15 == 1)
                        <tr>
                           
                            <td><p>Life on Land</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal16 == 1)
                        <tr>
                           
                            <td><p>Peace, Justice & p Instituations</p></td>
                        </tr>
                        @endif
                        @if ($report->sdgGoal17 == 1)
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
                                @if ($report-> maqasidShariahFaith  == 1)
                                    <p>Faith </p>  @endif
                                @if ($report->maqasidShariahLife   == 1)
                                    <p>Life</p> @endif 
                                @if ($report->maqasidShariahIntellect  == 1)
                                    <p>Intellect</p> @endif
                                @if ($report->maqasidShariahWealth == 1)
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
                                @if ($report->missionOfIiumIslamization  == 1)
                                    <p>Islamization</p>@endif  
                                @if ($report->missionOfIiumInternationalization   == 1)
                                    <p>Internationalization</p>  @endif
                                @if ($report->missionOfIiumIntegration  == 1)
                                    <p>Integration</p> 
                                @endif
                            </td>
                        </tr><br><br>

                        
                        <div class="flex -mr-px ">
                        <tr>
                            <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               ACHIEVEMENTS / OBSERVATION
                            </span> </div></td><br>
                            <p>{{$report->achievementsObservation}}</p>

                            </tr><br>
                            
                            <div class="flex -mr-px ">
                            <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SHORTCOMINGS
                            </span></div> </td><br>
                           
                                <p>{{$report->shortcomings}}</p> 
                            
                        </tr><br>

                        
                        <div class="flex -mr-px ">
                        <tr>
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               CONCLUSION
                            </span></div> </td><br>
                            <p>{{$report->conclusion}}</p> 

                        </tr><br>
                        <div class="flex -mr-px ">
                        <td><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SUGGESTIONS
                            </span></div> </td><br>

                            <p>{{$report->suggestions}}</p> 

                        </tr><br>


                         
                    <!-- </table> -->

        

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

