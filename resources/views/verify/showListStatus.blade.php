@extends('layouts.app')

@section('content')

<!-- <h1 class="text-gray-600 text-base leading-normal">List of Proposal with The Verification</h1><br/> -->

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

    <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-extralight w-full">
      <tr>
        <th class="bg-green-700 text-white text-center shadow-md rounded-md">PROPOSAL WITH VERIFICATION</th>
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
          @foreach($verify as $verify)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$verify['id']}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$verify['programmeName']}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{$verify['programmeOrganizer']}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    @if ($verify->programmeStatus === 'Accept')
                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Accepted</span>
                    @elseif ($verify->programmeStatus === 'Pending')
                        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Pending</span>
                    @else
                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Rejected</span>
                    @endif
                  </td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    <div class="flex item-center justify-center">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <a href="/showVerifyDetails/{{$verify['id']}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg></a>
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

@endsection