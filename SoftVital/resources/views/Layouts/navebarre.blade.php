<nav class="relative px-4 py-2 flex justify-between items-center bg-black bg-opacity-50 ">

    <a class="text-2xl font-bold text-white dark:text-white" href="#">
        SoftVital
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

        <button id="theme-toggle" type="button"
            class="hidden lg:inline-block lg:ml-auto py-1.5 px-3 m-1 text-center bg-gray-100 border border-gray-300 rounded-md text-black dark:text-gray-300 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700">
            <svg id="theme-toggle-dark-icon" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="theme-toggle-light-icon" class="w-5 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
        </button>
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
            <a href="{{ route('logout') }}"><button class=" py-1.5 px-3 m-1 text-center bg-blue-800 rounded-md text-white dark:text-gray-300 dark:bg-gray-700 hidden lg:inline-block ">logout</button></a>
        @endif

    </div>

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


<script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }


    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    var themeToggleDarkIcon_2 = document.getElementById('theme-toggle-dark-icon-2');
    var themeToggleLightIcon_2 = document.getElementById('theme-toggle-light-icon-2');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
            '(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
        if (themeToggleDarkIcon_2) {
            themeToggleLightIcon_2.classList.remove('hidden');
        }
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
        if (themeToggleDarkIcon_2) {
            themeToggleDarkIcon_2.classList.remove('hidden');
        }
    }


    var themeToggleBtn_2 = document.getElementById('theme-toggle-2');
    if (themeToggleBtn_2) {

        themeToggleBtn_2.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon_2.classList.toggle('hidden');
            themeToggleLightIcon_2.classList.toggle('hidden');

            sync_theme()

        });
    }


    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        sync_theme()


    });


    function sync_theme() {
        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    }



    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }


        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
