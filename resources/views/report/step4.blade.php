@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="container">
<div class="container p-4 shadow-md rounded-md text-left bg-gray-100 flex" style="max-width: 83.333333%">
<div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div>
    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto" style="max-width: max-content object-position: right">
        <div class="card">
            <div class="card-header">
            @section('header', 'PROGRAMME REPORT FORM (PRF) - Create (Organization Representative Only)')<br>
            </div>
            <div class="card-body"> 
                <h3>Review Details</h3>
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <tr>
                            <td>Name:</td>
                            <td><strong>{{$Report->programmeName}}</strong></td>
                        </tr>
                        <tr>
                            <td>Programme Organizer:</td>
                            <td><strong>{{$Report->programmeOrganizer}}</strong></td>
                        </tr>
                        <tr>
                            <td>Venue:</td>
                            <td><strong>{{$Report->venue}}</strong></td>
                        </tr>
                        <tr>
                            <td>outsiderParticipant:</td>
                            <td><strong>{{$Report->outsiderParticipant}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal1:</td>
                            <td><strong>{{$Report->sdgGoal1}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal2:</td>
                            <td><strong>{{$Report->sdgGoal2}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal3:</td>
                            <td><strong>{{$Report->sdgGoal3}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal4:</td>
                            <td><strong>{{$Report->sdgGoal4}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal5:</td>
                            <td><strong>{{$Report->sdgGoal5}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal6:</td>
                            <td><strong>{{$Report->sdgGoal6}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal7:</td>
                            <td><strong>{{$Report->sdgGoal7}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal8:</td>
                            <td><strong>{{$Report->sdgGoal8}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal9:</td>
                            <td><strong>{{$Report->sdgGoal9}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal10:</td>
                            <td><strong>{{$Report->sdgGoal10}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal11:</td>
                            <td><strong>{{$Report->sdgGoal11}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal12:</td>
                            <td><strong>{{$Report->sdgGoal12}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal13:</td>
                            <td><strong>{{$Report->sdgGoal13}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal14:</td>
                            <td><strong>{{$Report->sdgGoal14}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal15:</td>
                            <td><strong>{{$Report->sdgGoal15}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal16:</td>
                            <td><strong>{{$Report->sdgGoal16}}</strong></td>
                        </tr>
                        <tr>
                            <td>sdgGoal17:</td>
                            <td><strong>{{$Report->sdgGoal17}}</strong></td>
                        </tr>
                        <tr>
                            <td>achievementsObservation:</td>
                            <td><strong>{{$Report->achievementsObservation}}</strong></td>
                        </tr>
                        <tr>
                            <td>Image:</td>
                            <td><strong><img alt="{{$Report->file_path}}" src="/storage/app/public/file_path/{{$Report->file_path}}"/></strong></td>
                        </tr>
                    </table>

                    <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('report.create.step.3') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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

