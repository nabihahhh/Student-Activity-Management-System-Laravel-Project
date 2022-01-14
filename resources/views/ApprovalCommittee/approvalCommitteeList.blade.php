@extends('layouts.app')

@section('content')

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
      <tr>
        <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPROVAL COMMITTEE LIST</th>
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
              <th class="py-3 px-6 text-left">STAFF ID</th>
              <th class="py-3 px-6 text-left">NAME</th>
              <th class="py-3 px-6 text-left">CLUB/ASSOCIATION/KULL./DEPT./ETC.</th>
              <th class="py-3 px-6 text-center">POSITION</th>
              <th class="py-3 px-6 text-center">ACTION</th>
          </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">
          @foreach($approvalcommittee as $approvalcommittee)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$approvalcommittee->approvalCommitteeStaffID}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$approvalcommittee->approvalCommitteeName}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$approvalcommittee->approvalCommitteeOrg}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{$approvalcommittee->approvalCommitteePosition}}</td>

                  <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center">
                      <a href="/editApprovalCommittee/{{$approvalcommittee->id}}">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                          </svg>
                      </div></a>

                        <a href="delete/{{$approvalcommittee->id}}">
                          <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                          </div></a>
                    </div>
                  </td>
              </tr>
          @endforeach
          </table>

            </div>
          </div>
          </div>
          <div class="flex justify-start">
            <p class="text-gray-700 text-xs p-2.5">Please click the button to add new approval committee :
              <a href="{{url('/add')}}">
                <button type="button" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded">
              Add
                </button>
              </a>
            </p>
          </div>
      </div>
@endsection
