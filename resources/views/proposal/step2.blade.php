@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="container p-4 shadow-md rounded-md text-left bg-gray-100 flex" style="max-width: 83.333333%">
    <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div>
    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto" style="max-width: max-content object-position: right">
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
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('proposal.post.step.2') }}" method="POST">
                    @csrf
                    <div class="form-group">

                    <label for="name">
                            <span class="text-gray-700">5. Collaborations</span>
                         </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="collaborations" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.collaborations)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">6. Kull./Dept./Unit in Charge</span>
                         </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="kullDeptUnitInCharge" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.kullDeptUnitInCharge)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">7. Society/Club/Association</span>
                        </label>
                        <input class="form-input mt-1 block w-3/4" type="text" name="societyClubAssociation" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.societyClubAssociation)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">8. Type of Activity</span> 
                        </label><br>
                        <input type="hidden" name="participationActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="participationActivity" value= "1" {{ old('participationActivity') ? 'checked="checked"' : '' }} name="participationActivity" ><label for="participationActivity">
                            <span class="ml-2">Participation</span>
                        </label><br>
                        <input type="hidden" name="competitionActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="competitionActivity" value= "1" {{ old('competitionActivity') ? 'checked="checked"' : '' }} name="competitionActivity"><label for="competitionActivity">
                            <span class="ml-2">Competition</span>
                        </label><br><br>

                        <label for="name">
                            <span class="text-gray-700">9. Level of Activity (Please tick which relevant)</span> 
                        </label><br>
                        <input type="hidden" name="universityLevel" value="0">
                        <input type="checkbox" class="form-checkbox" id="universityLevel" value= "1" {{ old('universityLevel') ? 'checked="checked"' : '' }} name="universityLevel" ><label for="universityLevel">
                            <span class="ml-2">University</span>
                        </label><br>
                        <input type="hidden" name="nationalLevel" value="0">
                        <input type="checkbox" class="form-checkbox" id="nationalLevel" value= "1" {{ old('nationalLevel') ? 'checked="checked"' : '' }} name="nationalLevel"><label for="nationalLevel">
                            <span class="ml-2">National</span>
                        </label><br>
                        <input type="hidden" name="InternationalLevel" value="0">
                        <input type="checkbox" class="form-checkbox" id="InternationalLevel" value="1" {{ old('InternationalLevel') ? 'checked="checked"' : '' }} name="InternationalLevel"><label for="InternationalLevel">
                            <span class="ml-2">International </span>
                        </label><br>
                        <input type="hidden" name="societyDepartmentLevel" value="0">
                        <input type="checkbox" class="form-checkbox" id="societyDepartmentLevel" value="1" {{ old('societyDepartmentLevel') ? 'checked="checked"' : '' }} name="societyDepartmentLevel"><label for="societyDepartmentLevel">
                            <span class="ml-2">Society/Department</span>
                        </label><br>
                        <input type="hidden" name="compulsoryProgrammeLevel" value="0">
                        <input type="checkbox" class="form-checkbox" id="compulsoryProgrammeLevel" value="1" {{ old('compulsoryProgrammeLevel') ? 'checked="checked"' : '' }} name="compulsoryProgrammeLevel"><label for="compulsoryProgrammeLevel">
                            <span class="ml-2">Compulsory Programme (not entitled for STAR's point)</span>
                        </label><br><br>

                        <label for="name">
                            <span class="text-gray-700">10. Expected Number of Participant(s)</span> 
                        </label><br>
                        <span class="ml-2">Local</span>
                        <input class="form-input mt-1 block w-1/4" type="localParticipant" name="localParticipant" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.localParticipant)') }}">
                        <br>
                        <span class="ml-2">International</span>
                        <input class="form-input mt-1 block w-1/4" type="InternationalParticipant" name="InternationalParticipant" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('proposal.InternationalParticipant)') }}">
                        <br>


                        <label class="inline-flex items-center"  for="name">11. Variation of Activity (Please tick which relevant)</label><br>
                        <input type="hidden" name="attendingCeremonyActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="attendingCeremonyActivity" value= "1" {{ old('attendingCeremonyActivity') ? 'checked="checked"' : '' }} name="attendingCeremonyActivity" ><label for="attendingCeremonyActivity">
                            <span class="ml-2">Attending Ceremony</span>
                        </label><br>
                        <input type="hidden" name="bullettinNewsletterActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="bullettinNewsletterActivity" value= "1" {{ old('bullettinNewsletterActivity') ? 'checked="checked"' : '' }} name="bullettinNewsletterActivity"><label for="bullettinNewsletterActivity">
                            <span class="ml-2">Bulletin/Newsletter</span>
                        </label><br>
                        <input type="hidden" name="communityServiceActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="communityServiceActivity" value="1" {{ old('communityServiceActivity') ? 'checked="checked"' : '' }} name="communityServiceActivity"><label for="communityServiceActivity">
                            <span class="ml-2">Community Service</span>
                        </label><br>
                        <input type="hidden" name="counselingActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="counselingActivity" value="1" {{ old('counselingActivity') ? 'checked="checked"' : '' }} name="counselingActivity"><label for="counselingActivity">
                            <span class="ml-2">Counseling</span>
                        </label><br>
                        <input type="hidden" name="promotionBoothActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="promotionBoothActivity" value="1" {{ old('promotionBoothActivity') ? 'checked="checked"' : '' }} name="promotionBoothActivity"><label for="promotionBoothActivity">
                            <span class="ml-2">Promotion/Booth</span>
                        </label><br>

                        <input type="hidden" name="attendingCeremonyActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="attendingCeremonyActivity" value= "1" {{ old('attendingCeremonyActivity') ? 'checked="checked"' : '' }} name="attendingCeremonyActivity" ><label for="attendingCeremonyActivity">
                            <span class="ml-2">Attending Ceremony</span>
                        </label><br>
                        <input type="hidden" name="bullettinNewsletterActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="bullettinNewsletterActivity" value= "1" {{ old('bullettinNewsletterActivity') ? 'checked="checked"' : '' }} name="bullettinNewsletterActivity"><label for="bullettinNewsletterActivity">
                            <span class="ml-2">Bulletin/Newsletter</span>
                        </label><br>
                        <input type="hidden" name="communityServiceActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="communityServiceActivity" value="1" {{ old('communityServiceActivity') ? 'checked="checked"' : '' }} name="communityServiceActivity"><label for="communityServiceActivity">
                            <span class="ml-2">Community Service</span>
                        </label><br>
                        <input type="hidden" name="counselingActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="counselingActivity" value="1" {{ old('counselingActivity') ? 'checked="checked"' : '' }} name="counselingActivity"><label for="counselingActivity">
                            <span class="ml-2">Counseling</span>
                        </label><br>
                        <input type="hidden" name="promotionBoothActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="promotionBoothActivity" value="1" {{ old('promotionBoothActivity') ? 'checked="checked"' : '' }} name="promotionBoothActivity"><label for="promotionBoothActivity">
                            <span class="ml-2">Promotion/Booth</span>
                        </label><br>

                        <input type="hidden" name="attendingCeremonyActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="attendingCeremonyActivity" value= "1" {{ old('attendingCeremonyActivity') ? 'checked="checked"' : '' }} name="attendingCeremonyActivity" ><label for="attendingCeremonyActivity">
                            <span class="ml-2">Attending Ceremony</span>
                        </label><br>
                        <input type="hidden" name="bullettinNewsletterActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="bullettinNewsletterActivity" value= "1" {{ old('bullettinNewsletterActivity') ? 'checked="checked"' : '' }} name="bullettinNewsletterActivity"><label for="bullettinNewsletterActivity">
                            <span class="ml-2">Bulletin/Newsletter</span>
                        </label><br>
                        <input type="hidden" name="communityServiceActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="communityServiceActivity" value="1" {{ old('communityServiceActivity') ? 'checked="checked"' : '' }} name="communityServiceActivity"><label for="communityServiceActivity">
                            <span class="ml-2">Community Service</span>
                        </label><br>
                        <input type="hidden" name="counselingActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="counselingActivity" value="1" {{ old('counselingActivity') ? 'checked="checked"' : '' }} name="counselingActivity"><label for="counselingActivity">
                            <span class="ml-2">Counseling</span>
                        </label><br>
                        <input type="hidden" name="promotionBoothActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="promotionBoothActivity" value="1" {{ old('promotionBoothActivity') ? 'checked="checked"' : '' }} name="promotionBoothActivity"><label for="promotionBoothActivity">
                            <span class="ml-2">Promotion/Booth</span>
                        </label><br>

                        <input type="hidden" name="attendingCeremonyActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="attendingCeremonyActivity" value= "1" {{ old('attendingCeremonyActivity') ? 'checked="checked"' : '' }} name="attendingCeremonyActivity" ><label for="attendingCeremonyActivity">
                            <span class="ml-2">Attending Ceremony</span>
                        </label><br>
                        <input type="hidden" name="bullettinNewsletterActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="bullettinNewsletterActivity" value= "1" {{ old('bullettinNewsletterActivity') ? 'checked="checked"' : '' }} name="bullettinNewsletterActivity"><label for="bullettinNewsletterActivity">
                            <span class="ml-2">Bulletin/Newsletter</span>
                        </label><br>
                        <input type="hidden" name="communityServiceActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="communityServiceActivity" value="1" {{ old('communityServiceActivity') ? 'checked="checked"' : '' }} name="communityServiceActivity"><label for="communityServiceActivity">
                            <span class="ml-2">Community Service</span>
                        </label><br>
                        <input type="hidden" name="counselingActivity" value="0">
                        <input type="checkbox" class="form-checkbox" id="counselingActivity" value="1" {{ old('counselingActivity') ? 'checked="checked"' : '' }} name="counselingActivity"><label for="counselingActivity">
                            <span class="ml-2">Counseling</span>
                        </label><br>
                       
                        <br>
                        <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('signup1') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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

                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

