@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME REPORT FORM (PRF) - Review Details')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
           

<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center  " >
    <!-- insert image here -->
    <!-- <div class="p-4 rounded-md text-left flex-auto w-max" style="">
        <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">
    <div class="flex -mr-px ">
                            <td ><span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME DETAILS
                            </span>  </td>
                            </div>
                        </tr><br>

                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <!-- <table class="table table-bordered"> -->


                    
                    <tr>
                        <td><strong>Programme Name:</strong></td>
                        <td>{{$Report->programmeName}}</td>
                    </tr><br>

                    <tr>
                        <td><strong>Organizer:</strong></td>
                        <td>{{$Report->programmeOrganizer}}</td>
                    </tr><br>
                    <tr>
                        <td><strong>Venue:</strong></td>
                        <td>{{$Report->venue}}</td>
                    </tr><br>
                    
                    <tr>
                        <td><strong>Date:</strong></td>
                        <td>{{$Report->date}}</td>
                    </tr><br><br>
                    
                    <tr>
                        
                        <td><strong>Expected Number of Participant(s)</strong></td>
                    </tr><br>
                    <tr>
                        <td>Local Participant :</td>
                        <td><strong>{{$Report->localParticipant }}</strong></td>
                    </tr><br>
                    <tr>
                        <td>International Participant :</td>
                        <td><strong>{{$Report->InternationalParticipant }}</strong></td>
                    </tr><br><br>

                    <tr>
                        <td><strong>Collaborations:</strong></td>
                        <td>{{$Report->collaborations}}</td>
                    </tr><br>

                    <tr>
                        <td><strong>VIP' Attended:</strong></td>
                        <td>{{$Report->vipAttended }}</td>
                    </tr><br>
                    
                    <br>
                    <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               SDG GOALS
                            </span></div><br>
                        @if ($Report->sdgGoal1 == 1) 
                            <td><p>No Poverty</p></td>
                         @endif
                        </tr>
                        
                        @if ($Report->sdgGoal2 == 1)
                        <tr>
                            
                            <td><p>Zero Hunger</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal3 == 1)
                        <tr>
                            
                            <td><p>Good Health & Wellbeing</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal4 == 1)
                        <tr>
                           
                            <td><p>Quality Education</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal5 == 1)
                        <tr>
                            
                            <td><p>Gender Equality</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal6 == 1)
                        <tr>
                            
                            <td><p>Clean Water & Sanitation</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal7 == 1)
                        <tr>
                           
                            <td><p>Affordable & Clean Energy</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal8 == 1)
                        <tr>
                            
                            <td><p>Decent Work & Economic Growth</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal9 == 1)
                        <tr>
                            
                            <td><p>Industry, Innovation & Infrastructure</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal10 == 1)
                        <tr>
                            
                            <td><p> Reduce</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal11 == 1)
                        <tr>
                            
                            <td><p>Sustainable Cities & Communities</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal12 == 1)
                        <tr>
                           
                            <td><p>Responsible Consumption & Production</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal13 == 1)
                        <tr>
                           
                            <td><p>Climate Action</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal14 == 1)
                        <tr>
                           
                            <td><p> Life Below Water</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal15 == 1)
                        <tr>
                           
                            <td><p>Life on Land</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal16 == 1)
                        <tr>
                           
                            <td><p>Peace, Justice & p Instituations</p></td>
                        </tr>
                        @endif
                        @if ($Report->sdgGoal17 == 1)
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
                                @if ($Report-> maqasidShariahFaith  == 1)
                                    <p>Faith </p>  @endif
                                @if ($Report->maqasidShariahLife   == 1)
                                    <p>Life</p> @endif 
                                @if ($Report->maqasidShariahIntellect  == 1)
                                    <p>Intellect</p> @endif
                                @if ($Report->maqasidShariahWealth == 1)
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
                                @if ($Report->missionOfIiumIslamization  == 1)
                                    <p>Islamization</p>@endif  
                                @if ($Report->missionOfIiumInternationalization   == 1)
                                    <p>Internationalization</p>  @endif
                                @if ($Report->missionOfIiumIntegration  == 1)
                                    <p>Integration</p> 
                                @endif
                            </td>
                        </tr><br>

                        <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               PROGRAMME REPORT
                            </span></div><br>

                            <tr>
                        <td><strong>Achievements/Observation:</strong></td>
                        <td>{{$Report->achievementsObservation }}</td>
                    </tr><br>

                    <tr>
                        <td><strong>Shortcomings:</strong></td>
                        <td>{{$Report->shortcomings }}</td>
                    </tr><br>
                    <tr>
                        <td><strong>Conclusion:</strong></td>
                        <td>{{$Report->conclusion }}</td>
                    </tr><br>
                    
                    <tr>
                        <td><strong>Suggestions:</strong></td>
                        <td>{{$Report->suggestions }}</td>
                    </tr><br><br>
                    
                        </tr>
                        <!-- <div class="flex -mr-px ">
                        <tr>
                        <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white rounded  shadow-md rounded-md border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               PROGRAMME DOCUMENTS
                            </span></div><br> -->

                            <!-- <tr>
                        <td><strong>Google Drive Link:</strong></td>
                        <td>{{$Report->fileName }}</td>
                    </tr><br> -->


                 

                            <div class="flex justify-end space-x-4">
                                <button type="submit" class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                                    Save
                                </button>
                                <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                                    Submit
                                </button>
                            </div>
                            <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('report.create.step.3') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back
                                </a>
                            </div></div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

