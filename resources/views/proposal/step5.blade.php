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

                <form action="{{ route('proposal.post.step.5') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">


                    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                FINANCIAL REQUIREMENT
                            </span>
			            </div>
                        <br>

                        <div style="width: 700px;">
                            <span style="width:80%" class="pr-3 text-gray-700 text-base font-bold">Balance of budget available: </span>
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" placeholder="RM"/>
                        </div><br>

                        <span class="text-gray-700 text-base font-bold">Budget requested from:- </span><br><br>

                        <div style="width: 700px;">
                            <span style="width:40%" class="pr-3 text-gray-700 text-sm ">i. STADD/CCSC/EDC/SDC/CENSERVE/IWON/CITRA: </span>
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="budgetRequestedFromSTADDToCitra" class="form-control mb-2" placeholder="RM" value="{{ session()->get('proposal.budgetRequestedFromSTADDToCitra)') }}">
                        </div><br>

                        <div style="width: 700px;">
                            <span style="width:80%" class="pr-3c text-gray-700 text-sm ">ii. Kuliyyah: </span>
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="budgetRequestedFromKuliyyah" class="form-control mb-2" placeholder="RM" value="{{ session()->get('proposal.budgetRequestedFromKuliyyah)') }}">
                            
                        </div><br>

                        <div style="width: 700px;">
                            <span style="width:80%" class="pr-3 text-gray-700 text-sm ">iii. Mahallah: </span>
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="budgetRequestedFromMahallah" class="form-control mb-2" placeholder="RM" value="{{ session()->get('proposal.budgetRequestedFromMahallah)') }}">
                        </div><br>

                        <div style="width: 700px;">
                            <span style="width:80%" class="pr-3 text-gray-700 text-sm ">iv. Sponsors: </span>
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="budgetRequestedFromSponsors" class="form-control mb-2" placeholder="RM" value="{{ session()->get('proposal.budgetRequestedFromSponsors)') }}"> 
                        </div><br>

                        
                        <div style="width: 700px;">
                            <span style="width:80%" class="pr-3 text-gray-700 text-base font-bold">Total Budget: </span> 
                            <input style="width: 20%;" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="totalBudget" class="form-control mb-2" placeholder="RM" value="{{ session()->get('proposal.totalBudget)') }}"> 
                        </div><br>

                        <div style="width: 700px;"> 
                            <span style="width:40%" class="pr-3 text-gray-700 text-base font-bold">Transportation:- </span>
                            <select style="width:10%" id="typeTransportation" name="typeTransportation" value="{{ session()->get('proposal.typeTransportation)') }}" class="  h-8 px-2 border-gray-300 bg-white text-gray-500 sm:text-sm rounded">
                                <option>Bus</option>
                                <option>Minibus</option>
                                <option>Van</option>
                                <option>Lorry</option>
                                <option>4WD</option>
                                <option>MPV</option>
                            </select>
                        </div><br>

                        <div style="width: 700px;"> 
                            <span style="width:40%" class="pr-3 text-gray-700 text-sm ">i. Transportation Quantity: </span>
                            <input style="width:10%" class=" h-8 px-2 text-sm text-gray-700 placeholder-gray-600 border-gray-300 rounded focus:shadow-outline" type="text" name="quantityTransportation" class="form-control mb-2" placeholder="" value="{{ session()->get('proposal.quantityTransportation)') }}">
                        </div><br><br>

                         <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                RECOMMENDATION
                            </span>
			            </div>

                        <div style=" "> 
                            <span style=" " class="text-gray-700 text-sm font-bold">i. ADVISOR/COORDINATOR FELLOW (MAHALLAH)</span>
                            <select style=" " id="approvalCommitteeName" name="approvalCommitteeName" value="{{ session()->get('proposal.approvalCommitteeName)') }}" class="mt-1 block w-3/6 rounded">
                                <option>Adam Bin Ali</option>
                                <option>syifa</option>
                                <!-- <option>Van</option>
                                <option>Lorry</option>
                                <option>4WD</option>
                                <option>MPV</option> -->
                            </select>
                        </div><br>

                        <div style=" "> 
                            <span style=" " class="text-gray-700 text-sm font-bold">ii. OFFICER-IN-CHARGE (K/C/D/I/O/M)/ ASSISTANT DIRECTOR (for joint/collaboration programme, signature of the main organiser is required in the Joint Programme Form)</span>
                            <select style=" " id="approvalCommitteeName2" name="approvalCommitteeName2" value="{{ session()->get('proposal.approvalCommitteeName2)') }}" class="mt-1 block w-3/6 rounded">
                                <option>Adam Bin Ali</option>
                                <option>syifa</option>
                                <!-- <option>Van</option>
                                <option>Lorry</option>
                                <option>4WD</option>
                                <option>MPV</option> -->
                            </select>
                        </div><br>

                        <div style=" "> 
                            <span style=" " class="text-gray-700 text-sm font-bold">iii. HEAD OF DEPARTMENT/DEPUTY DIRECTOR/DEPUTY DEAN/PRINCIPAL</span>
                            <select style=" " id="approvalCommitteeName3" name="approvalCommitteeName3" value="{{ session()->get('proposal.approvalCommitteeName3)') }}" class="mt-1 block w-3/6 rounded">
                                <option>Adam Bin Ali</option>
                                <option>syifa</option>
                                <option>mai</option>
                                <!-- <option>Van</option>
                                <option>Lorry</option>
                                <option>4WD</option>
                                <option>MPV</option> -->
                            </select>
                        </div><br>

                        <div style=" "> 
                            <span style=" " class="text-gray-700 text-sm font-bold">iv. DEAN/DIRECTOR</span>
                            <select style=" " id="approvalCommitteeName4" name="approvalCommitteeName4" value="{{ session()->get('proposal.approvalCommitteeName4)') }}" class="mt-1 block w-3/6 rounded">
                                <option>Adam Bin Ali</option>
                                <option>syifa</option>
                                <!-- <option>Van</option>
                                <option>Lorry</option>
                                <option>4WD</option>
                                <option>MPV</option> -->
                            </select>
                        </div><br>

                         <!-- <span class="text-gray-700 text-sm font-bold">i. ADVISOR/COORDINATOR FELLOW (MAHALLAH)</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="approvalCommitteeName" class="form-control mb-2" placeholder="approvalCommitteeName" value="{{ session()->get('proposal.approvalCommitteeName)') }}">
                        <br> -->

                        <!-- <span class="text-gray-700 text-sm font-bold">ii. OFFICER-IN-CHARGE (K/C/D/I/O/M)/ ASSISTANT DIRECTOR (for joint/collaboration programme, signature of the main organiser is required in the Joint Programme Form)</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeManagerName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeManagerName)') }}">
                        <br> -->

                        <!-- <span class="text-gray-700 text-sm font-bold">iii. HEAD OF DEPARTMENT/DEPUTY DIRECTOR/DEPUTY DEAN/PRINCIPAL</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeManagerName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeManagerName)') }}">
                        <br> -->

                        <!-- <span class="text-gray-700 text-sm font-bold">iv. DEAN/DIRECTOR</span>
                        <input class="form-input mt-1 block w-3/6" type="text" name="programmeManagerName" class="form-control mb-2" placeholder="Name" value="{{ session()->get('proposal.programmeManagerName)') }}">
                        <br> -->

                        <br><br>
                    <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('proposal.create.step.4') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
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

