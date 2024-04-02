<nav class="relative py-2 flex justify-between px-6 md:px-60 items-center bg-white">

    <a href="#" class="flex items-center">

        <h2 class="font-bold text-3xl">Soft <span class="bg-[#f84525] text-white px-2 rounded-md">Vital</span></h2>
    </a>

    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-violet-600 dark:text-gray-100 p-1" id="navbar_burger">
            <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Hamberger menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>

    <div class="hidden lg:flex">

        @if (!auth()->check())
            <a href="#">
                <button
                    class=" py-1.5 px-3 m-1 text-center bg-white border rounded-md text-black  hover:bg-blue-400 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700 hidden lg:block">
                    Vous êtes praticien ?
                </button>
            </a>

            <div>
                <span class="hidden" id="util_data" data=""></span>
                <a href="/Authentification"
                    class=" py-1.5 px-3 m-1 text-center bg-blue-800 rounded-md text-white dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block "
                    href="https://tailwindflex.com/login">
                    Se connecter
                </a>
            </div>
        @else
            {{-- <a href="{{ route('logout') }}"><button
                    class=" py-1.5 px-3 m-1 text-center bg-blue-800 rounded-md text-white dark:text-white dark:bg-purple-700 hidden lg:inline-block ">logout</button></a> --}}
            <div class="text-lg lg:flex-grow flex justify-center items-center text-gray-500">
                <a href="" class="block mt-4 lg:inline-block lg:mt-0 mr-8 hover:text-blue-400">
                    Page d'accueil
                </a>
                <a href="" class="block mt-4 lg:inline-block lg:mt-0 mr-8 hover:text-blue-400">
                    Mes rendez-vous
                </a>
                <a href="" class="block mt-4 lg:inline-block lg:mt-0 hover:text-blue-400">
                    Mes notfication
                </a>
            </div>


          
        @endif
    </div>

    @if(auth()->check())
    <div class=" right-0">
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex justify-center items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                <span
                    class="">{{ ucfirst(substr(auth()->user()->nom, 0, 1)) . substr(auth()->user()->nom, 1) }}</span>
                <img class="inline h-6 rounded-full"
                    src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4">
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                    class="inline w-4 h-4 transition-transform duration-200 transform">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                    @if (auth()->user()->role->first()->role === 'medecin')
                        <a href="mon_profil"
                            class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Profile</a>
                        <a href="{{ route('dashboard_medecin') }}"
                            class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Dashboard</a>
                    @endif
    
                    <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Settings</a>
                    <div class="border-b"></div>
                    <a href="{{ route('logout') }}"
                        class="flex items-center gap-3 px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                            <path fill="black"
                                d="M5 3h6a3 3 0 0 1 3 3v4h-1V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-4h1v4a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3m3 9h11.25L16 8.75l.66-.75l4.5 4.5l-4.5 4.5l-.66-.75L19.25 13H8z" />
                        </svg>
                        <p>Se deconnecter</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif

</nav>


<!-- mobile navbar -->
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-50"></div>
    <nav
        class="fixed bg-white dark:bg-gray-600 top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 border-r overflow-y-auto">

        <div class="flex items-center mb-8">
            <a class="mr-auto text-2xl font-bold text-violet-600 dark:text-gray-100" href="https://tailwindflex.com/">
                SoftVital
            </a>

            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <div class="">

            <div class="pt-6">
                <button id="theme-toggle-2" type="button"
                    class="w-[97.6%] mb-3 flex justify-center align-middle py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg id="theme-toggle-dark-icon-2" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon-2" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <a href="/Authentification"
                    class="block m-1 bg-gray-100 border border-gray-300 text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 px-4 py-3 mb-3 text-sm text-center font-semibold rounded-xl">
                    Se connecter
                </a>

                <a class="block m-1 bg-gray-100 border border-gray-300 text-black  hover:bg-gray-100 dark:text-gray-300 dark:bg-gray-700 px-4 py-3 mb-3 text-sm text-center font-semibold rounded-xl"
                    href="/login">
                    Vous êtes praticien ?
                </a>

            </div>
        </div>
    </nav>
</div>
