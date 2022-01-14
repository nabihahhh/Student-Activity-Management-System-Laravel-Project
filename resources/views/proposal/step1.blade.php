@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) - Create')<br>
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
       

            <div class="card-body text-rose-600 ">
                @if ($errors->any())
                    <div class="alert alert-danger ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <span style="color:red;">
                                    <li>{{ $error }}</li><br>
                                </span>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('proposal.post.step.1') }}" method="POST">
                    @csrf
                    <div class="form-group">

                    
                    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME INFORMATION
                            </span>
			            </div>
                        <br>

                    <label for="name">
                            <span class="text-gray-700">1. Programme Budget</span>
                         </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="programmeBudget" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.programmeBudget)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">2. Name of Programme</span>
                         </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="programmeName" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.programmeName)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">3. Organiser</span>
                        </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="programmeOrganizer" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.programmeOrganizer)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">4. Venue</span> 
                        </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="venue" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.venue)') }}">
                        <br>


                        <label for="name">
                            <span class="text-gray-700">3. Date</span>
                        </label>
                        <input class="form-input mt-1 block w-1/4" type="date" name="date" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.date)') }}">
                        <br>

                        <label class="inline-flex items-center"  for="name">4. Type of Programme (Please tick which relevant)</label><br>
                        <input type="hidden" name="studentDrivenProgramme" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal1" value= "1" {{ old('studentDrivenProgramme') ? 'checked="checked"' : '' }} name="studentDrivenProgramme" ><label for="studentDrivenProgramme">
                            <span class="ml-2">Student Driven</span>
                        </label><br>
                        <input type="hidden" name="departmentDrivenProgramme" value="0">
                        <input type="checkbox" class="form-checkbox" id="departmentDrivenProgramme" value= "1" {{ old('departmentDrivenProgramme') ? 'checked="checked"' : '' }} name="departmentDrivenProgramme"><label for="departmentDrivenProgramme">
                            <span class="ml-2">Department Driven</span>
                        </label><br>
                        <input type="hidden" name="invitationalProgramme" value="0">
                        <input type="checkbox" class="form-checkbox" id="invitationalProgramme" value="1" {{ old('invitationalProgramme') ? 'checked="checked"' : '' }} name="invitationalProgramme"><label for="invitationalProgramme">
                            <span class="ml-2">Invitational Programme </span>
                        </label><br>
                        <input type="hidden" name="jointProgramme" value="0">
                        <input type="checkbox" class="form-checkbox" id="jointProgramme" value="1" {{ old('jointProgramme') ? 'checked="checked"' : '' }} name="jointProgramme"><label for="jointProgramme">
                            <span class="ml-2">Joint Programme</span>
                        </label><br>
                        <input type="hidden" name="creditedProgramme" value="0">
                        <input type="checkbox" class="form-checkbox" id="creditedProgramme" value="1" {{ old('creditedProgramme') ? 'checked="checked"' : '' }} name="creditedProgramme"><label for="creditedProgramme">
                            <span class="ml-2">Credited Programme (not entitled for STAR's point)</span>
                        </label><br>
                        <span class="ml-2">Others (please specify)</span>
                        <input class="form-input mt-1 block w-3/4" type="text" name="venue" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.othersProgramme')}}">
                           
                        </label><br><br>

                        
                        

                        <div class="flex justify-end space-x-4">
                        <button type="submit" class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                            Save
                        </button>
                        <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                            Next
                        </button>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

