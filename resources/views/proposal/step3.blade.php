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

                
                <form action="{{ route('proposal.post.step.3') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    
                    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME VALUES
                            </span>
			            </div>
                        <br>

                    <label class="inline-flex items-center"  for="name">10. SDG Goals</label><br>
                        <input type="hidden" name="sdgGoal1" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal1" value= "1" {{ old('sdgGoal1') ? 'checked="checked"' : '' }} name="sdgGoal1" ><label for="sdgGoal1">
                            <span class="ml-2">Goal 1: No Poverty</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal2" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal2" value= "1" {{ old('sdgGoal2') ? 'checked="checked"' : '' }} name="sdgGoal2"><label for="sdgGoal2">
                            <span class="ml-2">Goal 2: Zero Hunger</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal3" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal3" value="1" {{ old('sdgGoal3') ? 'checked="checked"' : '' }} name="sdgGoal3"><label for="sdgGoal3">
                            <span class="ml-2">Goal 3: Good Health & Wellbeing</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal4" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal4" value="1" {{ old('sdgGoal4') ? 'checked="checked"' : '' }} name="sdgGoal4"><label for="sdgGoal4">
                            <span class="ml-2">Goal 4: Quality Education</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal5" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal5" value="1" {{ old('sdgGoal5') ? 'checked="checked"' : '' }} name="sdgGoal5"><label for="sdgGoal5">
                            <span class="ml-2">Goal 5 Gender Equality</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal6" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal6" value="1" {{ old('sdgGoal6') ? 'checked="checked"' : '' }} name="sdgGoal6"><label for="sdgGoal6">
                            <span class="ml-2">Goal 6: Clean Water & Sanitation</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal7" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal7" value="1" {{ old('sdgGoal7') ? 'checked="checked"' : '' }} name="sdgGoal7"><label for="sdgGoal7">
                            <span class="ml-2">Goal 7: Affordable & Clean Energy</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal8" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal8" value="1" {{ old('sdgGoal8') ? 'checked="checked"' : '' }} name="sdgGoal8"><label for="sdgGoal8">
                            <span class="ml-2">Goal 8: Decent Work & Economic Growth</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal9" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal9" value="1" {{ old('sdgGoal9') ? 'checked="checked"' : '' }} name="sdgGoal9"><label for="sdgGoal9">
                            <span class="ml-2">Goal 9: Industry, Innovation & Infrastructure</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal10" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal10" value="1" {{ old('sdgGoal10') ? 'checked="checked"' : '' }} name="sdgGoal10"><label for="sdgGoal10">
                            <span class="ml-2">Goal 10: Reduce</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal11" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal11" value="1" {{ old('sdgGoal11') ? 'checked="checked"' : '' }} name="sdgGoal11"><label for="sdgGoal11">
                            <span class="ml-2">Goal 11: Sustainable Cities & Communities</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal12" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal12" value="1" {{ old('sdgGoal12') ? 'checked="checked"' : '' }} name="sdgGoal12"><label for="sdgGoal12">
                            <span class="ml-2">Goal 12: Responsible Consumption & Production</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal13" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal13" value="1" {{ old('sdgGoal13') ? 'checked="checked"' : '' }}  name="sdgGoal13"><label for="sdgGoal13">
                            <span class="ml-2">Goal 13: Climate Action</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal14" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal14" value="1" {{ old('sdgGoal14') ? 'checked="checked"' : '' }} name="sdgGoal14"><label for="sdgGoal14">
                            <span class="ml-2">Goal 14: Life Below Water</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal15" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal15" value="1" {{ old('sdgGoal15') ? 'checked="checked"' : '' }} name="sdgGoal15"><label for="sdgGoal15">
                            <span class="ml-2">Goal 15: Life on Land</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal16" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal16" value="1" {{ old('sdgGoal16') ? 'checked="checked"' : '' }} name="sdgGoal16"><label for="sdgGoal16">
                            <span class="ml-2">Goal 16: Peace, Justice & Strong Instituations</span>
                        </label><br>
                        <input type="hidden" name="sdgGoal17" value="0">
                        <input type="checkbox" class="form-checkbox" id="sdgGoal17" value="1" {{ old('sdgGoal17') ? 'checked="checked"' : '' }} name="sdgGoal17"><label for="sdgGoal17">
                            <span class="ml-2">Goal 17: Partnership for the goals</span>
                        </label>
                        <br><br>

                        <label class="inline-flex items-center" for="name">11. MAQASID SHARIAH (Please tick which relevent) </label><br>
                        <input type="hidden" name="maqasidShariahFaith" value="0">
                        <input type="checkbox" class="form-checkbox" id="maqasidShariahFaith" value="1" {{ old('maqasidShariahFaith') ? 'checked="checked"' : '' }} name="maqasidShariahFaith"checked ><label for="maqasidShariahFaith">
                            <span class="ml-2">Faith</span>
                        </label><br>
                        <input type="hidden" name="maqasidShariahLife" value="0">
                        <input type="checkbox" class="form-checkbox" id="maqasidShariahLife" value="1" {{ old('maqasidShariahLife') ? 'checked="checked"' : '' }} name="maqasidShariahLife"><label for="maqasidShariahLife">
                            <span class="ml-2">Life</span>
                        </label><br>
                        <input type="hidden" name="maqasidShariahIntellect" value="0">
                        <input type="checkbox" class="form-checkbox" id="maqasidShariahIntellect" value="1" {{ old('maqasidShariahIntellect') ? 'checked="checked"' : '' }} name="maqasidShariahIntellect"><label for="maqasidShariahIntellect">
                            <span class="ml-2">Intellect</span>
                        </label><br>
                        <input type="hidden" name="maqasidShariahLineage" value="0">
                        <input type="checkbox" class="form-checkbox" id="maqasidShariahLineage" value="1" {{ old('maqasidShariahLineage') ? 'checked="checked"' : '' }} name="maqasidShariahLineage"><label for="maqasidShariahLineage">
                            <span class="ml-2">Lineage</span>
                        </label><br>
                        <input type="hidden" name="maqasidShariahWealth" value="0">
                        <input type="checkbox" class="form-checkbox" id="maqasidShariahWealth" value="1" {{ old('maqasidShariahWealth') ? 'checked="checked"' : '' }} name="maqasidShariahWealth"><label for="maqasidShariahWealth">
                            <span class="ml-2">Wealth</span>
                        </label><br>
                        <br><br>

                        <label class="inline-flex items-center" for="name">12. MISSION OF IIUM (Please tick which relevent) </label><br>
                        <input type="hidden" name="maqasidShariahWealth" value="0">
                        <input type="checkbox" class="form-checkbox" id="missionOfIiumIslamization" value="1" {{ old('missionOfIiumIslamization') ? 'checked="checked"' : '' }} name="missionOfIiumIslamization"checked ><label for="missionOfIiumIslamization">
                            <span class="ml-2">Islamization</span>
                        </label><br>
                        <input type="hidden" name="maqasidShariahWealth" value="0">
                        <input type="checkbox" class="form-checkbox" id="missionOfIiumInternationalization" value="1" {{ old('missionOfIiumInternationalization') ? 'checked="checked"' : '' }} name="missionOfIiumInternationalization" ><label for="missionOfIiumInternationalization">
                            <span class="ml-2">Internationalization</span>
                        </label><br>
                        <input type="hidden" name="missionOfIiumIntegration" value="0">
                        <input type="checkbox" class="form-checkbox" id="missionOfIiumIntegration" value="1" {{ old('missionOfIiumIntegration') ? 'checked="checked"' : '' }} name="missionOfIiumIntegration" ><label for="missionOfIiumIntegration">
                        <span class="ml-2">Integration</span>
                        </label>
                        <br><br>

                    <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('proposal.create.step.2') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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
                                    Next
                                </button>
                            </div>
                        </div>

                </form><br/>
                @if(isset($Report->file_path))
                        <form action="{{ route('remove.image') }}" method="post">
                            {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Remove Image</button>
                        </form>
                        @endif
            </div>
        </div>
    </div>

@endsection   

