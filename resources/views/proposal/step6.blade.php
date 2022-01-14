@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME Proposal FORM (PRF) - Create (Organization Representative Only)')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
           

<div class="container p-4 max-w-screen-lg mx-auto pb-10 flex justify-center bg-gray-50 " >
    <!-- insert image here -->
    <!-- <div class="p-4 rounded-md text-left flex-auto w-max" style="">
        <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto w-screen " style=" ">
                <h3>Review Details</h3><br>
                <form action="{{ route('store1') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <tr>
                            <td>Name:</td>
                            <td><strong>{{$Proposal->programmeName}}</strong></td>
                        </tr>
                        <tr>
                            <td>Programme Organizer:</td>
                            <td><strong>{{$Proposal->programmeOrganizer}}</strong></td>
                        </tr>
                        <tr>
                            <td>Venue:</td>
                            <td><strong>{{$Proposal->venue}}</strong></td>
                        </tr>
                        <tr>
                            <td>outsiderParticipant:</td>
                            <td><strong>{{$Proposal->outsiderParticipant}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal1:</td>
                            <td><strong>{{$Proposal->sdgGoal1}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal2:</td>
                            <td><strong>{{$Proposal->sdgGoal2}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal3:</td>
                            <td><strong>{{$Proposal->sdgGoal3}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal4:</td>
                            <td><strong>{{$Proposal->sdgGoal4}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal5:</td>
                            <td><strong>{{$Proposal->sdgGoal5}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal6:</td>
                            <td><strong>{{$Proposal->sdgGoal6}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal7:</td>
                            <td><strong>{{$Proposal->sdgGoal7}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal8:</td>
                            <td><strong>{{$Proposal->sdgGoal8}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal9:</td>
                            <td><strong>{{$Proposal->sdgGoal9}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal10:</td>
                            <td><strong>{{$Proposal->sdgGoal10}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal11:</td>
                            <td><strong>{{$Proposal->sdgGoal11}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal12:</td>
                            <td><strong>{{$Proposal->sdgGoal12}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal13:</td>
                            <td><strong>{{$Proposal->sdgGoal13}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal14:</td>
                            <td><strong>{{$Proposal->sdgGoal14}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal15:</td>
                            <td><strong>{{$Proposal->sdgGoal15}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal16:</td>
                            <td><strong>{{$Proposal->sdgGoal16}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal17:</td>
                            <td><strong>{{$Proposal->sdgGoal17}}</strong></td>
                        </tr>
                        <tr>
                            <td>achievementsObservation:</td>
                            <td><strong>{{$Proposal->achievementsObservation}}</strong></td>
                        </tr>
                        <!-- <tr>
                            <td>Image:</td>
                            <td><strong><img alt="{{$Proposal->file_path}}" src="/storage/app/public/file_path/{{$Proposal->file_path}}"/></strong></td>
                        </tr> -->
                    </table>

                    <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('proposal.create.step.5') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back
                                </a>
                            </div>

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
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

