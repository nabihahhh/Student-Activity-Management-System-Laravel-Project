

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Send to Approval Committee')<br>
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
                
    </div>

<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center  " >
    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4">
        <div class="card-body">
            <form method="POST" action="{{ route("admin.proposal.send", $proposal) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">

                
                @if ($proposal->status_id == 1)
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               APPROVAL COMMITTEE (APPROVER 1)
                            </span><br>
                <strong>ADVISOR / COORDINATOR / FELLOW(MAHALLAH)</strong><br><br>
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               REQUESTED BY ORGANISER
                            </span><br>
                <!-- <span><strong> Advisor/Coordinator/Fellow(Mahallah) Requested </span></strong><br> -->
                @if ($proposal->approvalCommittee_id === 1)
                        <span class="">Adam bin Ali</span>
                    @elseif ($proposal->approvalCommittee_id === 2)
                        <span class="">syifa</span>
                    @elseif ($proposal->approvalCommittee_id === 3)
                        <span class="">mai</span>
                    @elseif ($proposal->approvalCommittee_id === 4)
                        <span class="">nabihah</span>
                        @elseif ($proposal->approvalCommittee_id === 9)
                        <span class="">Dr. Suriani Sulaiman</span>
                    @endif
                    @endif

                @if ($proposal->status_id == 3 || $proposal->status_id == 4)
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               APPROVAL COMMITTEE (APPROVER 2)
                            </span><br>
                <strong>OFFICER-IN-CHARGE (K/C/D/I/O/M) / ASSISTANT DIRECTOR </strong><br><br>
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               REQUESTED BY ORGANISER
                            </span><br>
                 <!-- <span><strong>Officer-in-Charge (K/C/D/I/O/M)/Assistant Director Requested</strong></span><br> -->
                    @if ($proposal->approvalCommittee2_id === 1)
                        <span class="">Adam bin Ali</span>
                    @elseif ($proposal->approvalCommittee2_id === 2)
                        <span class="">syifa</span>
                    @elseif ($proposal->approvalCommittee2_id === 3)
                        <span class="">mai</span>
                    @elseif ($proposal->approvalCommittee2_id === 4)
                        <span class="">nabihah</span>
                        @elseif ($proposal->approvalCommittee2_id === 13)
                        <span class="">Asst. Prof. Dr. Hayati</span>
                    @endif
                    @endif

                @if ($proposal->status_id == 6 || $proposal->status_id == 7)
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               APPROVAL COMMITTEE (APPROVER 3)
                            </span><br>
                <strong>HEAD OF DEPARTMENT / DEPUTY DIRECTOR / DEPUTY DEAN / PRINCIPAL</strong><br><br>
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               REQUESTED BY ORGANISER
                            </span><br>
                 <!-- <span><strong>Head of Department/Deputy Director/Deputy Dean/Principal Requested: </strong></span> -->
                @if ($proposal->approvalCommittee3_id === 1)
                        <span class="">Adam bin Ali</span>
                    @elseif ($proposal->approvalCommittee3_id === 2)
                        <span class="">syifa</span>
                    @elseif ($proposal->approvalCommittee3_id === 3)
                        <span class="">mai</span>
                    @elseif ($proposal->approvalCommittee3_id === 4)
                        <span class="">Nabihah</span>
                        @elseif ($proposal->approvalCommittee3_id === 15)
                        <span class="">Prof. Dr. Ahmad</span>
                    @endif
                    @endif

                    @if ($proposal->status_id == 9 || $proposal->status_id == 10)
                    <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               APPROVAL COMMITTEE (APPROVER 4)
                            </span><br>
                <strong>DEAN / DIRECTOR </strong><br><br>
                    <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               REQUESTED BY ORGANISER
                            </span><br>
                 <!-- <span><strong>Dean/Director Requested</strong></span><br> -->
                @if ($proposal->approvalCommittee4_id === 1)
                        <span class="">Adam bin Ali</span>
                    @elseif ($proposal->approvalCommittee4_id === 2)
                        <span class="">syifa</span>
                    @elseif ($proposal->approvalCommittee4_id === 3)
                        <span class="">mai</span>
                    @elseif ($proposal->approvalCommittee4_id === 4)
                        <span class="">nabihah</span>
                        @elseif ($proposal->approvalCommittee4_id === 16)
                        <span class="">Assoc. Prof. Dr. Suhailah</span>
                    @endif
                    @endif
                
                    <!-- <label for="user_id">{{ $role }}</label> -->
                    <br><br>
                    <!-- <label for="user_id" class="px-6">Approval Committee Assigned to</label> -->
                    <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               ASSIGNED TO
                            </span><br>
                    <select class="w-full form-control select2 {{ $errors->has('user_id') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                        @foreach($users as $id => $user)
                            <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('user_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user_id') }}
                        </div>
                    @endif
                </div>
                <br><br>
                <div class="form-group px-2 ">
                    <button class="btn btn-danger  bg-blue-400 text-white py-1 px-6 rounded-full text-sm" type="submit">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>




@endsection 

