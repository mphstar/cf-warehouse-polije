<div class="py-5 px-4 flex h-fit w-full flex-row justify-between border-b-[2px]">
    <img class="h-fit w-fit" src="/assets/images/logo1.png" alt="logo">
    <button onclick="handleProfile()" class="h-12 rounded-full flex items-center space-x-2 hover:text-blue-600 focus:outline-none">
        <img class="h-12 rounded-full" src="{{ Auth::check() ? Auth::user()->getAvatar() : 'https://picsum.photos/200' }}" alt="profile">
        <span>
            @if (Auth::check())
                {{ Auth::user()->getName() }}
            @else
                Tamu
            @endif
        </span>
    </button>
</div>

{{-- bg hitam --}}
<div onclick="handleProfile()" id="bgProfile" class="min-h-screen bg-black fixed flex w-full opacity-0 left-0 top-0 pointer-events-none duration-300 ease-in-out">
</div>

{{-- dialog --}}
<div id="dialogProfile" class="flex flex-col w-full md:w-[400px] min-h-screen bg-white fixed right-0 translate-x-[800px] md:translate-x-[400px] drop-shadow-xl duration-300 ease-in-out">
    <div class="flex flex-row justify-between items-center border-b-[2px] px-6 py-6">
        <div class="flex flex-row gap-4 items-center">
            <img class="h-12 rounded-full" src="{{ Auth::check() ? Auth::user()->getAvatar() : 'https://picsum.photos/200' }}" alt="profile">
            <div class="flex flex-col">
                <p class="whitespace-pre-line font-poppins-semibold text-gray-600">
                    @if (Auth::check())
                        {{ Auth::user()->getName() }}
                    @else
                        Tamu
                    @endif
                </p>
                <p class="text-xs text-gray-600">Student</p>
            </div>
        </div>
        <button onclick="handleProfile()" class="p-2 hover:bg-slate-200 rounded-md duration-200">
            <svg class="" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <div class="flex flex-1 w-full flex-col py-6 px-4">
        <button class="flex flex-row gap-6 px-4 py-3 rounded-md hover:bg-slate-200 cursor-pointer duration-200">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
            <span><a >Kelola Dataset</a></span>
        </button>
        <button class="flex flex-row gap-6 px-4 py-3 rounded-md hover:bg-slate-200 cursor-pointer duration-200">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                <polyline points="10 17 15 12 10 7"></polyline>
                <line x1="15" y1="12" x2="3" y2="12"></line>
            </svg>
            <span>Keluar</span>
            <a href="{{ route('logout') }}" class="absolute top-0 left-0 w-full h-full"></a>
        </button>
    </div>
</div>