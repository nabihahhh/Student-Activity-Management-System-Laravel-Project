

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
        <!-- <h1 class="text-gray-600 text-base leading-normal">List of Proposal with The Verification</h1><br/> -->

<div class="overflow-x-auto">
  <div class="min-w-screen h-min bg-gray-50 flex-auto justify-center  font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed  py-3 px-6 whitespace-nowrap text-gray-600 text-xl mt-4 font-extralight w-full">
      <tr>
      <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b rounded-md">
    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#first">Programme Proposal Form (PPF)</a></li>
    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#second">Programme Report Form (PRF)</a></li>
  </ul>
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

    <div id="tab-contents">
    <div id="first" class="p-4">
    <table class="min-w-max w-full table-auto bg-white shadow-md rounded my-6">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-3 text-left">ID</th>
              <th class="py-3 px-3 text-left">Programme Name</th>
              <th class="py-3 px-1 text-center">Organized by</th>
              <th class="py-3 px-1 text-center">Status</th>
              <th class="py-3 px-1 text-left">Approver 1</th>
              <th class="py-3 px-1 text-left">Approver 2</th>
              <th class="py-3 px-1 text-left">Approver 3</th>
              <th class="py-3 px-1 text-left">Approver 4</th>
              <th class="py-3 px-2 text-center">Action</th>
          </tr>

          </thead>
          <tbody class="text-gray-600 text-sm font-light">
          @foreach($proposal as $key =>  $proposal)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-3 text-left whitespace-nowrap font-medium">{{ $proposal->id ?? '' }}</td>
                  <td class="py-3 px-3 text-left whitespace-nowrap font-medium">{{ $proposal->programmeName ?? '' }}</td>
                  <td class="py-3 px-1 text-center whitespace-nowrap">{{ $proposal->programmeOrganizer ?? '' }}</td>
                  <td class="py-3 px-3 text-center whitespace-nowrap">
                  
                  @if ($proposal->status_id == 1)
                            <span>Pending approvals</span>
                        @elseif ($proposal->status_id == 2)
                            <span>Approver 1 processing</span>
                        @elseif ($proposal->status_id == 3)
                            <span>Approver 1 accepted</span>
                        @elseif ($proposal->status_id == 4)
                            <span>Approver 1 rejected</span>

                        @elseif ($proposal->status_id == 5)
                            <span>Approver 2 processing</span>
                        @elseif ($proposal->status_id == 6)
                            <span>Approver 2 accepted</span>
                        @elseif ($proposal->status_id == 7)
                            <span>Approver 2 rejected</span>

                        @elseif ($proposal->status_id == 8)
                            <span>Approver 3 processing</span>
                        @elseif ($proposal->status_id == 9)
                            <span>Approver 3 accepted</span>
                        @elseif ($proposal->status_id == 10)
                            <span>Approver 3 rejected</span>
                        
                        @elseif ($proposal->status_id == 11)
                            <span>Approver 4 processing</span>
                        @elseif ($proposal->status_id == 12)
                            <span>Approver 4 accepted</span>
                        @elseif ($proposal->status_id == 13)
                            <span>Approver 4 rejected</span>
                        
                        @elseif ($proposal->status_id == 14)
                            <span>Accepted</span>
                        @elseif ($proposal->status_id == 15)
                            <span>Rejected</span>
                        @endif

                  </td>
                  @if($user->is_admin)
                  <td class="py-3 px-1 text-left whitespace-nowrap font-medium">
                  
                    <!-- fix this  -->
                    <!-- {{ $proposal->approvalCommittee->name ?? 'oh' }} -->
                                
                                
                            
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
                  </td>
                  @endif
                  <td class="py-3 px-1 text-left whitespace-nowrap font-medium">
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
                </td>
                  <td class="py-3 px-1 text-left whitespace-nowrap font-medium">
                  @if ($proposal->approvalCommittee3_id === 1)
                        <span class="">Adam bin Ali</span>
                    @elseif ($proposal->approvalCommittee3_id === 2)
                        <span class="">syifa</span>
                    @elseif ($proposal->approvalCommittee3_id === 3)
                        <span class="">mai</span>
                    @elseif ($proposal->approvalCommittee3_id === 4)
                        <span class="">nabihah</span>
                        @elseif ($proposal->approvalCommittee3_id === 15)
                        <span class="">Prof. Dr. Ahmad</span>
                    @endif
                  </td>
                  <td class="py-3 px-1 text-left whitespace-nowrap font-medium">
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
                  </td>
                  <td class="py-3 px-3 text-center whitespace-nowrap">

                    @if($user->is_admin && in_array($proposal->status_id, [1, 3, 6, 9]))
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-1 rounded-full text-xs" href="{{ route('admin.proposal.showSend', $proposal->id) }}">
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
                    @elseif(($user->is_approvalCommittee && $proposal->status_id == 2) || ($user->is_approvalCommittee && $proposal->status_id == 5)
                    || ($user->is_approvalCommittee && $proposal->status_id == 8) || ($user->is_approvalCommittee && $proposal->status_id == 11))
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-1 rounded-full text-xs" href="{{ route('admin.proposal.showAnalyze', $proposal->id) }}">
                                        Submit analysis
                                    </a>
                    @elseif(($user->is_admin && $proposal->status_id == 12) || ($user->is_admin && $proposal->status_id == 13))
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-1 rounded-full text-xs" href="{{ route('admin.proposal.showAnalyze', $proposal->id) }}">
                                        Submit approval
                                    </a>
                    @endif
                                        
                                   
                       
                               <br>
                                    <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('admin.proposal.show', $proposal->id) }}">
                                        {{ trans('View') }} 
                                    </a>
                                    
                                
                                
                                    <a class="btn btn-xs btn-info bg-yellow-200 text-yellow-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('admin.proposal.edit', $proposal->id) }}">
                                        {{ trans('Edit') }}
                                    </a> 
                                
                                 
                                    <form action="{{ route('admin.proposal.destroy', $proposal->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are you sure?') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-dange bg-red-200 text-red-600 py-0.3 px-2 rounded-full text-xs" value="{{ trans('Delete') }}">
                                    </form>
                                
                  </td>
              </tr>
          @endforeach
          </table>

    </div>
    <div id="second" class="hidden p-4">
    <table class="min-w-max w-full table-auto bg-white shadow-md rounded my-6">
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
          @foreach($report as $key =>  $report)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{ $report->id ?? '' }}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{ $report->programmeName ?? '' }}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{ $report->programmeOrganizer ?? '' }}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                  
                  <!-- <span class=""> -->
                        <!-- {{ $user->is_user && $report->status111_id < 14 ? $defaultStatus->name : $report->status_id}} -->
                        @if ($report->status_id == 1)
                            <span>Pending approvals</span>
                        @elseif ($report->status_id == 2)
                            <span>Approver 1 processing</span>
                        @elseif ($report->status_id == 3)
                            <span>Approver 1 accepted</span>
                        @elseif ($report->status_id == 4)
                            <span>Approver 1 rejected</span>

                        @elseif ($report->status_id == 5)
                            <span>Approver 2 processing</span>
                        @elseif ($report->status_id == 6)
                            <span>Approver 2 accepted</span>
                        @elseif ($report->status_id == 7)
                            <span>Approver 2 rejected</span>

                        @elseif ($report->status_id == 8)
                            <span>Approver 3 processing</span>
                        @elseif ($report->status_id == 9)
                            <span>Approver 3 accepted</span>
                        @elseif ($report->status_id == 10)
                            <span>Approver 3 rejected</span>
                        
                        @elseif ($report->status_id == 11)
                            <span>Approver 4 processing</span>
                        @elseif ($report->status_id == 12)
                            <span>Approver 4 accepted</span>
                        @elseif ($report->status_id == 13)
                            <span>Approver 4 rejected</span>
                        
                        @elseif ($report->status_id == 14)
                            <span>Accepted</span>
                        @elseif ($report->status_id == 15)
                            <span>Rejected</span>
                        @endif
                    <!-- </span> -->
                
                  </td>
                  <td class="py-3 px-3 text-center whitespace-nowrap">
                  <!-- @if(($report->status_id == 14))
                                    <a class="btn btn-xs btn-success bg-blue-400 text-white py-0.3 px-1 rounded-full text-xs" href="{{ route('signup') }}">
                                        Create Programme Report Form (PRF)
                                    </a>
                    @endif -->
                  
                    <div class="flex item-center justify-center">
                      <!-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"> -->
                      <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('show.Verify.Details', $report->id) }}">
                                        {{ trans('View') }} 
                                    </a>
                      </div>
                    </div>
                  </td>
          @endforeach
          </table>
    </div>
    </div> 
     

    




    <script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
    toggler.addEventListener("click", function(e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {
        
        tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");
        
        }
        e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
    });
    });

</script>

    

@endsection 

