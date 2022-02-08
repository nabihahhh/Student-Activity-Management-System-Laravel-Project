

@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Dashboard')<br>
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


<div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto" style="max-width: max-content object-position: right">
    <div class="flex flex-col">
    <!-- Stats Row Starts Here -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-2/4 mx-2">
            <div class="p-4 flex flex-col ">
                <a href="{{ route('list.PPF.Verify') }}" class="no-underline text-gray-700 text-2xl">
                    Verify
                </a>
                <a href="{{ route('list.PPF.Verify') }}" class="no-underline text-gray-700 text-lg">
                    Programme Proposal
                </a>
            </div>
        </div>

        <!-- <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-2/4 mx-2">
            <div class="p-4 flex flex-col ">
                <a href="#" class="no-underline text-gray-700 text-2xl">
                    List
                </a>
                <a href="#" class="no-underline text-gray-700 text-lg">
                    Approval Committee
                </a>
            </div>
        </div> -->


       


    
            </div>
        </div>

        <br>
        <!-- <h1 class="text-gray-600 text-base leading-normal">List of Proposal with The Verification</h1><br/> -->

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed  py-3 px-6 whitespace-nowrap text-gray-600 text-xl mt-4 font-extralight w-full">
    <tr>
        
        <tr>   
        <th>&nbsp;</th>
          
          <th class="bg-green-700 text-white text-center shadow-md rounded-md text-sm">PENDING APPROVALS</th>
          
        </tr>
        <tr>
        <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
        </tr>
    </table>

    <div class="w-full">
      <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">ID</th>
              <th class="py-3 px-6 text-left">Programme Name</th>
              <th class="py-3 px-6 text-center">Organized by</th>
              <th class="py-3 px-6 text-center">Status</th>
              <th class="py-3 px-6 text-center">Action</th>
          </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">
          @foreach($proposal as $proposal)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal['id']}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal['programmeName']}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{$proposal['programmeOrganizer']}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    
                    <span class="">
                        {{ $user->is_user && $proposal->status_id < 16 ? $defaultStatus->name : $proposal->status->name}}
                    </span>
        
                  </td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                  @if($user->is_admin && in_array($proposal->status_id, [1, 3, 6, 9]))
                                    <a class="btn btn-xs btn-success" href="{{ route('admin.proposal.showSend', $proposal->id) }}">
                                        Send to
                                        @if($proposal->status_id == 1)
                                            Approval Committee 1
                                        @elseif($proposal->status_id == 3)
                                            Approval Committee 2
                                        @elseif($proposal->status_id == 6)
                                            Approval Committee 3
                                        @elseif($proposal->status_id == 9)
                                            Approval Committee 4
                                        @endif
                                    </a>
                    @elseif(($proposal->status_id == 2) || ($proposal->status_id == 5)
                    || ($proposal->status_id == 8) || ($proposal->status_id == 11))
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-1 rounded-full text-xs" href="{{ route('admin.proposal.showAnalyze', $proposal->id) }}">
                                        Submit analysis
                                    </a>
                    @endif
                    <div class="flex item-center justify-center">
                      <!-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"> -->
                      <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('admin.proposal.show', $proposal->id) }}">
                                        {{ trans('View') }} 
                                    </a>
                      </div>
                    </div>
                  </td>
              </tr>
          @endforeach
          </table>
      </div>
    </div>
  </div>
</div>

    </div>
    
    </div>

    

@endsection 

