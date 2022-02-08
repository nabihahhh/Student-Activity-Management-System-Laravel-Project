    
    
<nav :class="{'block': open, 'hidden': !open}" class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
       <!-- <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-gray-900 rounded dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Blog</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">About</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Contact</a> --> 
      @if (Auth::user()->hasRole('organizer'))
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Progress Form</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-20 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Programme Proposal Form</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="{{route('progress.report')}}">Programme Report Form</a>
          </div>
        </div>
        @endif
      @if (Auth::user()->hasRole('organizer'))
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Programme Proposal Form (PPF)</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-20 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Create</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Draft</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a>
          </div>
        </div>
        @endif

        @if (Auth::user()->hasRole('organizer'))
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Programme Report Form (PRF)</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-20 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Create</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Draft</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a>
          </div>
        </div>
        @endif

        <!-- @if (Auth::user()->hasRole('organizer'))
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Financial Report</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Create</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Draft</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a>
          </div>
        </div>
      </div>
      @endif -->

      @if (Auth::user()->hasRole('approvalCommittee'))
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Programme Proposal Form (PPF)</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Verify</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a>
          </div>
        </div>
      </div>
      @endif

      @if (Auth::user()->hasRole('staddAdmin'))
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Pending Approvals</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="{{route('dashboard')}}">Programme Proposal Form (PPF)</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="{{route('pending.prf')}}">Programme Report Form (PRF)</a>
          </div>
        </div>
      </div>
      @endif

      <!-- @if (Auth::user()->hasRole('staddAdmin'))
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Financial Report</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">Verify</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a>
          </div>
        </div>
      </div>
      @endif -->

      @if (Auth::user()->hasRole('staddAdmin'))
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline">
          <span>Manage</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="z-10 absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
          <div class="px-2 py-2 bg-gray-900 rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="{{ route("admin.users.index") }}">Approval Committee</a>
            <!-- <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-gray-900 rounded dark-mode:bg-gray-900 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover text-white focus text-white hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:shadow-outline" href="#">History</a> -->
          </div>
        </div>
      </div>
      @endif
      
    </nav>