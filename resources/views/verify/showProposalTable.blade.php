@extends('layouts.app')

@section('content')

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <style>
    .card-body{
      display: inline-block;
      --tw-space-x-reverse: 0;
      margin-right: calc(2rem * var(--tw-space-x-reverse));
      margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
    }
  </style>


<div class="container p-4 max-w-screen-lg mx-auto pb-10 flex justify-center bg-gray-100" style=" "> <!--another box layering below form box -->
    <!-- <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div> -->

    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto w-screen" style=" ">
       
                  <div class="flex -mr-px ">
				            <span class="px-10 py-1 flex items-center leading-normal bg-green-700 text-white rounded rounded-r-none border border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                                LIST OF PROGRAMME PROPOSAL
                    </span>
			            </div>
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

            <!-- Search by category section start -->
                  <div class="leading-8 card-body">
                      <form action=# method="get" role="search">
                        @csrf
                        <div class="div_search pt-2 relative mx-auto text-gray-600">
                          <select id="activityType" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" name="activityType">
                            <option value="" disabled selected>Category</option>
                            <option value="Participation">Participation</option>
                            <option value="Competition">Competition</option>
                          </select>
                        </div>
                      </form>
                  </div>
            <!-- Search by category section end -->

            <!-- Search by date section start -->
                  <div class="leading-8 card-body">
                      <form action="/searchDate" method="get" role="search">
                        @csrf
                        <div class="div_search pt-2 relative mx-auto text-gray-600">
                          <input type="text" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" name="daterange" placeholder="Search date" autocomplete="off" class="form-control">
                        </div>
                      </form>
                  </div>
            <!-- Search by date section end -->

            <!-- Search by level section start -->
            <div class="leading-8 card-body">
                <form action=# method="get" role="search">
                  @csrf
                  <div class="div_search pt-2 relative mx-auto text-gray-600">
                    <select id="activityLevel" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" name="activityLevel">
                      <option value="" disabled selected>Activity Level</option>
                      <option value="Participation">University</option>
                      <option value="Competition">National</option>
                      <option value="Competition">International</option>
                      <option value="Competition">Society/Department</option>
                      <option value="Competition">Compulsory</option>
                    </select>
                  </div>
                </form>
            </div>
            <!-- Search by level section end -->

    <div class="w-full">
      <div class="bg-white shadow-md rounded my-6">
        <table class="min-w-max w-full table-auto">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">ID</th>
              <th class="py-3 px-6 text-left">Programme Name</th>
              <th class="py-3 px-6 text-center">Organized by</th>
              <th class="py-3 px-6 text-left">Received</th>
              <th class="py-3 px-6 text-left">Action</th>
          </tr>
          </thead>
          <tbody class="text-gray-600 text-sm font-light">

          @forelse($proposal as $proposal)
              <tr class="border-b border-gray-200 hover:bg-gray-100 flex-auto">
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal->id}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap font-medium">{{$proposal->programmeName}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">{{$proposal->programmeOrganizer}}</td>
                  <td class="py-3 px-6 text-left whitespace-nowrap">{{$proposal->created_at}}</td>
                  <td class="py-3 px-6 text-center whitespace-nowrap">
                    <div class="flex item-center justify-center">
                      <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <a href="/showStatus/{{$proposal->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg></a>
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

      <script>
      $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        },
        function(start, end, label) {
            console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
      });
      </script>
@endsection
