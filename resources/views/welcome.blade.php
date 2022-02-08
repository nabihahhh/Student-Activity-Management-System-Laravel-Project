

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
                <a href="{{ route("admin.users.index") }}" class="no-underline text-gray-700 text-2xl">
                    Manage
                </a>
                <a href="{{ route("admin.users.index") }}" class="no-underline text-gray-700 text-lg">
                    Approval Committee
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
        <!-- <h1 class="text-gray-600 text-base leading-normal">List of report with The Verification</h1><br/> -->

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed  py-3 px-6 whitespace-nowrap text-gray-600 text-xl mt-4 font-extralight w-full">
      <tr>
        
      <tr>   
      <th>&nbsp;</th>
        
        <th class="bg-green-700 text-white text-center shadow-md rounded-md text-sm">PENDING APPROVALS - PROGRAMME REPORT FORM (PRF)</th>
        
      </tr>
      <tr>
      <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </table>

    <div class="w-full">
      <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto ">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-3 text-left">ID</th>
              <th class="py-3 px-3 text-left">Programme Name</th>
              <th class="py-3 px-1 text-center">Organized by</th>
              <th class="py-3 px-3 text-center">Status</th>
              <th class="py-3 px-2 text-center">Action</th>
          </tr>

          </thead>
          <tbody class="text-gray-600 text-sm font-light">
          @foreach($report as $key =>  $report)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-3 text-left whitespace-nowrap font-medium">{{ $report->id ?? '' }}</td>
                  <td class="py-3 px-3 text-left whitespace-nowrap font-medium">{{ $report->programmeName ?? '' }}</td>
                  <td class="py-3 px-1 text-center whitespace-nowrap">{{ $report->programmeOrganizer ?? '' }}</td>
                  <td class="py-3 px-3 text-center whitespace-nowrap">

                  @if ($report->status_id == 1)
                    <span>Pending approvals</span>
                  @elseif ($report->status_id == 14)
                    <span>Accepted</span>
                  @elseif ($report->status_id == 15)
                    <span>Rejected</span>
                  @endif
                  </td>
                 
                  
                  <td class="py-3 px-3 text-center whitespace-nowrap">

                    @if(($user->is_admin && $report->status_id == 1) )
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-6 rounded-full text-xs" href="{{route('admin.report.showAnalyze', $report->id) }}">
                                        Submit approval
                                    </a>
                    @endif
                                        
                                   
                       
                               <br>
                                    <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="">
                                        {{ trans('View') }} 
                                    </a>
                                    
                                
                                
                                    <a class="btn btn-xs btn-info bg-yellow-200 text-yellow-600 py-0.3 px-2 rounded-full text-xs" href="">
                                        {{ trans('Edit') }}
                                    </a> 
                                
                                
                                    <form action="" method="POST" onsubmit="return confirm('{{ trans('Are you sure?') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-dange bg-red-200 text-red-600 py-0.3 px-2 rounded-full text-xs" value="{{ trans('Delete') }}"> 
                                    </form>
                                
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

