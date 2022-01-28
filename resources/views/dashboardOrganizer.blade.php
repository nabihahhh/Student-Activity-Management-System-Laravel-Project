

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
                <a href="{{ route('signup1') }}" class="no-underline text-gray-700 text-2xl">
                    Create
                </a>
                <a href="{{ route('signup1') }}" class="no-underline text-gray-700 text-lg">
                    Programme Proposal Form (PPF)
                </a>
            </div>
        </div>

        <div class="shadow-lg bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-2/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="{{ route('signup') }}" class="no-underline text-gray-700 text-2xl">
                    Create
                </a>
                <a href="{{ route('signup') }}" class="no-underline text-gray-700 text-lg">
                    Programme Report Form (PRF)
                </a>
            </div>
        </div>

        <div class="shadow-lg bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-2/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="#" class="no-underline text-gray-700 text-2xl">
                    Create
                </a>
                <a href="#" class="no-underline text-gray-700 text-lg">
                    Financial Report 
                </a>
            </div>
        </div>
    
            </div>
        </div>
        <br>
        <!-- <h1 class="text-gray-600 text-base leading-normal">List of Proposal with The Verification</h1><br/> -->

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed  py-3 px-6 whitespace-nowrap text-gray-600 text-xl mt-4 font-extralight w-full">
      <tr>
        
        <th class=" text-gray-600 text-start">&emsp;&emsp;Progress Submitted Forms</th>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td>&nbsp;</td>
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
          @foreach($proposal as $key =>  $proposal)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{ $proposal->id ?? '' }}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{ $proposal->programmeName ?? '' }}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{ $proposal->programmeOrganizer ?? '' }}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                  
                  <span class="">
                        {{ $user->is_user && $proposal->status_id < 14 ? $defaultStatus->name : $proposal->status->name}}
                    </span>
                
                  </td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    <div class="flex item-center justify-center">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <a href="/showVerifyDetails/{{$proposal['id']}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg></a>
                      </div>
                    </div>
                  </td>
          @endforeach
          </table>
      </div>
    </div>
  </div>
</div>
    </div>
    
</div> 

    </div>



@endsection 

