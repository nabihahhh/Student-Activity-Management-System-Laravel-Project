@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) - Create (Organization Representative Only)')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>

 <div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center " style=" "> <!--another box layering below form box -->
    <!-- <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">
       

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

                
                <form action="{{ route('proposal.post.step.4') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                    
                    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                STUDENT IN-CHARGE
                            </span>
			            </div>
                        <br>

                         <span class="text-gray-700 text-sm font-bold">Programme Manager</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeManagerName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeManagerName)') }}">
                        <input class="form-input mt-1 block w-32" type="text" name="programmeManagerMatricNo" class="form-control mb-2" placeholder="Matric No." value="{{ session()->get('proposal.programmeManagerMatricNo)') }}">
                        <input class="form-input mt-1 block w-1/6" type="text" name="programmeManagerPhoneNo" class="form-control mb-2" placeholder="Phone No." value="{{ session()->get('proposal.programmeManagerPhoneNo)') }}">
                        <br>

                        <span class="text-gray-700 text-sm font-bold">Programme Secretary</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeSecretaryName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeSecretaryName)') }}">
                        <input class="form-input mt-1 block w-32" type="text" name="programmeSecretaryMatricNo" class="form-control mb-2" placeholder="Matric No." value="{{ session()->get('proposal.programmeSecretaryMatricNo)') }}">
                        <input class="form-input mt-1 block w-1/6" type="text" name="programmeSecretaryPhoneNo" class="form-control mb-2" placeholder="Phone No." value="{{ session()->get('proposal.programmeSecretaryPhoneNo)') }}">
                        <br>

                        <span class="text-gray-700 text-sm font-bold">Programme Treasurer</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeTreasurerName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeTreasurerName)') }}">
                        <input class="form-input mt-1 block w-32" type="text" name="programmeTreasurerMatricNo" class="form-control mb-2" placeholder="Matric No." value="{{ session()->get('proposal.programmeTreasurerMatricNo)') }}">
                        <input class="form-input mt-1 block w-1/6" type="text" name="programmeTreasurerPhoneNo" class="form-control mb-2" placeholder="Phone No." value="{{ session()->get('proposal.programmeTreasurerPhoneNo)') }}">
                        <br>

                        <span class="text-gray-700 text-sm font-bold">Pesident of Association/Club/Society</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="presidentClubSocietyName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.presidentClubSocietyName)') }}">
                        <input class="form-input mt-1 block w-32" type="text" name="presidentClubSocietyMatricNo" class="form-control mb-2" placeholder="Matric No." value="{{ session()->get('proposal.presidentClubSocietyMatricNo)') }}">
                        <input class="form-input mt-1 block w-1/6" type="text" name="presidentClubSocietyPhoneNo" class="form-control mb-2" placeholder="Phone No." value="{{ session()->get('proposal.presidentClubSocietyPhoneNo)') }}">
                        <br><br>

                        
                        <label for="name">
                        <span class="">Undertaking</span><br>
                        </label>
                       
                        <input type="hidden" name="clarifyTick" value="0">
                        <input type="checkbox" class=" form-checkbox" id="clarifyTick" value="1" {{ old('clarifyTick') ? 'checked="checked"' : '' }} name="clarifyTick"><label for="clarifyTick">

                        <span class="pl-3 text-gray-700 text-sm font-bold">
                            I hereby certify that the above information given are true and correct as to the best of my knowledge.  
                        </span>
                        
                        <br><br>

                   

                            <div class="flex justify-end space-x-4">
                            <a href="{{route('dashboard') }}"  class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                            </a>
                                <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                                    Next
                                </button>
                            </div>
                            <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('proposal.create.step.3') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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

