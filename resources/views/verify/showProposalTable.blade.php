@extends('layouts.app')

@section('content')

  <style>
    .card-body{
      display: inline-block;
      --tw-space-x-reverse: 0;
      margin-right: calc(2rem * var(--tw-space-x-reverse));
      margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
    }
  </style>

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) -  HISTORY')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>


            <div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center  " style=" "> <!--another box layering below form box -->
    <!-- <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4" style=" ">
    <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                PROGRAMME PROPOSAL FORM (PPF) 
                            </span>
			            </div>
                        <br>
                  <br>

            <!-- Start of Search bar -->
                <div class="leading-8 card-body">
                    <form action="/search" method="get" role="search">
                      @csrf
                      <div class="div_search pt-2 relative mx-auto text-gray-600">
                        <input type="search" class="inline-block border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" name="keyword" placeholder="Search keyword" autocomplete="off" class="form-control">
                          <span class="input-group-prepend">
                            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                  xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                  viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                  width="512px" height="512px">
                                  <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                          </span>
                      </div>
                    </form>
                  </div>
            <!--End of Search bar -->

            <!-- Search by date section start -->
            <div class="leading-8 card-body">
                <form action="/searchDate" method="get" role="search">
                  @csrf
                  <div class="div_search pt-2 relative mx-auto text-gray-600">
                    <input type="date" class="inline-block border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" name="start_date">
                    <label class="inline-block">to</label>
                    <input type="date" class="inline-block border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none" name="end_date">
                    <button type="submit" class="inline-block bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded" name="search">Find</button>
                  </div>
                </form>
              </div>
            <!-- Search by date section end -->

    <div class="w-full">
      <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">ID</th>
              <th class="py-3 px-6 text-left">Programme Name</th>
              <th class="py-3 px-6 text-center">Organized by</th>
              <th class="py-3 px-6 text-left">Date</th>
              <th class="py-3 px-6 text-left">Action</th>
          </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">

          @forelse($proposal as $proposal)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal->id}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal->programmeName}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{$proposal->programmeOrganizer}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">{{$proposal->date}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    <div class="flex item-left">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <!-- <a href="/showStatus/{{$proposal->id}}"> -->
                        <div class="flex item-left justify-left">
                      <!-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110"> -->
                      <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="/showStatus/{{$proposal->id}}">
                                        {{ trans('View') }} 
                                    </a>
                      </div>
                    <!-- </a> -->
                      </div>
                    </div>
                  </td>
              </tr>
          @empty
              <p class="text-gray-600 text-xs text-center leading-8 bg-gray-100">There are no proposals matching your search.</p>
          @endforelse
        </table>
      </div>
    </div>
  </div>
</div>
@endsection