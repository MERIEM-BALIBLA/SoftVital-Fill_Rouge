@extends('Layouts.app')

@section('content')
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        /*Start Animations*/
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0;
            }

            to {
                top: 0;
                opacity: 1;
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0;
            }

            to {
                top: 0;
                opacity: 1;
            }
        }

        @-webkit-keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }
        }

        /*End Animations*/
        /*
            -- Start BackGround Animation
            */
        .area {
            /* background: #575edf; */
            /* dark:background-image:#575edf; */
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            z-index: -1;
        }


        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 96%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

       
    </style>
    
    <div class="relative w-full mb-4 rounded-b-2xl area bg-indigo-600 dark:bg-orange-500">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class=" py-60 px-10 rounded-b-2xl " {{-- style="opacity:3;" --}}>
            <div class="text-center relative z-10 w-full">
                <h2 class="text-2xl text-white font-medium title-font mb-16">Prenez rendez-vous avec votre médecin au cabinet
                </h2>

                <div class="sm:w-2/3 my-auto mx-auto px-4">
                    <form class=" ">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative flex">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." />
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." />
                            <input type="search" id="default-search"
                                class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." />

                            <button type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </div>

    <div class="md:absolute flex md:flex-row flex-col justify-center gap-8 md:top-2/4 md:left-0 md:right-0 mx-auto">

        <div
            class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl  sm:max-w-sm sm:rounded-lg sm:px-10">
            <span
                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <div class="relative z-10 mx-auto max-w-md">
                <span
                    class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-10 w-10 text-white transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                </span>
                <div
                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                    <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share
                        online.</p>
                </div>
                <div class="pt-5 text-base font-semibold leading-7">
                    <p>
                        <a href="#" class="text-sky-500 transition-all duration-300 group-hover:text-white">Read the
                            docs
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <div
            class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:max-w-sm sm:rounded-lg sm:px-10">
            <span
                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <div class="relative z-10 mx-auto max-w-md">
                <span
                    class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-10 w-10 text-white transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                </span>
                <div
                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                    <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share
                        online.</p>
                </div>
                <div class="pt-5 text-base font-semibold leading-7">
                    <p>
                        <a href="#" class="text-sky-500 transition-all duration-300 group-hover:text-white">Read the
                            docs
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div
            class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:max-w-sm sm:rounded-lg sm:px-10">
            <span
                class="absolute top-10 z-0 h-20 w-20 rounded-full bg-sky-500 transition-all duration-300 group-hover:scale-[10]"></span>
            <div class="relative z-10 mx-auto max-w-md">
                <span
                    class="grid h-20 w-20 place-items-center rounded-full bg-sky-500 transition-all duration-300 group-hover:bg-sky-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-10 w-10 text-white transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                    </svg>
                </span>
                <div
                    class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                    <p>Perfect for learning how the framework works, prototyping a new idea, or creating a demo to share
                        online.</p>
                </div>
                <div class="pt-5 text-base font-semibold leading-7">
                    <p>
                        <a href="#" class="text-sky-500 transition-all duration-300 group-hover:text-white">Read the
                            docs
                            &rarr;
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <section class="text-gray-600 body-font md:mt-56 dark:bg-gray-950">
        <div class="container px-5 py-24 mx-auto">
            <h2 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">SoftVital <br> au
                service de votre santé</h2>
            <div class=" sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">

                <div class="flex md:flex-row mb-10 items-center">
                    <div class="rounded-lg w-1/3 overflow-hidden">
                        <img alt="content" class="object-cover object-center "
                            src="{{ asset('assets/images/calender.png') }}">
                    </div>
                    <div class="">
                        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Planifiez un rendez-vous sans
                            nécessité de déplacement.</h2>
                        <button
                            class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col">
                    <div
                        class="ml-8 w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                            <path fill="#5baefb"
                                d="M20.13 4.155a5 5 0 0 0-4.39-1.07A6 6 0 0 0 12 5.665a6 6 0 0 0-3.72-2.58a5.09 5.09 0 0 0-4.4 1c-1.58 1.38-2.45 4.44-1.46 7.54c.112.342.246.676.4 1c.04.075.077.152.11.23c2.57 5.24 8.51 8 8.77 8.13a.672.672 0 0 0 .31.07a.702.702 0 0 0 .31-.07c.25-.11 6.25-2.85 8.8-8.15l.08-.17c.158-.34.295-.691.41-1.05c.94-3 .08-6.06-1.48-7.46m-.31 7.93c-.14.314-.3.618-.48.91h-3.31a1 1 0 0 1-.83-.45l-1.05-1.56l-2.23 4.46a1 1 0 0 1-.73.54h-.16a1 1 0 0 1-.71-.3l-2.71-2.7H4.7a10.595 10.595 0 0 1-.5-1a6.336 6.336 0 0 1-.38-1h4.21a.999.999 0 0 1 .71.29l2 2l2.38-4.76a1 1 0 0 1 .84-.55a1 1 0 0 1 .89.44l1.7 2.56h3.7a6.572 6.572 0 0 1-.43 1.12" />
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">

                        <p class="leading-relaxed text-base">Gérez votre santé et celle de vos proches de façon sécurisée :
                            compte, rendez-vous.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Neptune</h2>
                        <p class="leading-relaxed text-base">Prévenez l’apparition de maladies grâce à des messages de
                            sensibilisation..</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 sm:px-10 md:px-24 lg:px-40 py-10">
        <div class="rounded-xl"
            style="background-image: url('{{ asset('assets/images/bg.jpg') }}');background-position: center; background-size: cover;">
            <div class="flex flex-col md:flex-row py-10 md:px-80 justify-between items-center sm:gap-10 bg-blue-500 bg-opacity-25 hover:bg-orange-400 hover:shadow-lg transition-colors duration-300"
                style="">

                <h4 class="text-black font-bold text-3xl sm:text-4xl lg:text-5xl hover:text-white">SoftVital c'est...</h4>
                <div class="flex flex-col md:flex-row md:gap-32 mt-6 sm:mt-0">
                    <div class="text-center">
                        <span class="font-medium text-2xl sm:text-3xl lg:text-4xl text-blue-500">80 millions</span>
                        <br>
                        <span class="text-gray-500">de patients</span>
                    </div>
                    <div class="text-center">
                        <span class="font-medium text-2xl sm:text-3xl lg:text-4xl text-indigo-800">900 000</span>
                        <br>
                        <span class="text-gray-500">utilisateurs professionnels</span>
                    </div>
                    <div class="text-center">
                        <span class="font-medium text-2xl sm:text-3xl lg:text-4xl text-indigo-800">97%</span>
                        <br>
                        <span class="text-gray-500">evenements</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="w-5/6 object-cover object-center rounded" alt="hero"
                    src="{{ asset('assets/images/Pic.png') }}">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Vous êtes professionnel de santé
                    ?</h3>
                <p class="mb-8 leading-relaxed">Rejoignez SoftVital et gagnez sur tous les plans!</p>
                <ul class="list-none mb-8">
                    <li>&#9733; Un cabinet plus visible</li>
                    <li>&#9733; Davantage de flux grâce à la prise de RDV 24/24</li>
                    <li>&#9733; Des confirmations et rappels de RDV par SMS envoyés à tous vos patients</li>
                </ul>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">En
                        savoir plus</button>

                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Bien dans sa tête, bien dans sa
                    vie
                </h3>
                <p class="mb-8 leading-relaxed">Anxiété, souffrance au travail, troubles du sommeil, problèmes au sein du
                    couple, inquiétudes pour son enfant…<br>Pour aller mieux, on a parfois besoin de parler à un
                    professionnel</p>

                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">En
                        savoir plus</button>

                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="w-4/5 object-cover object-center rounded" alt="hero"
                    src="{{ asset('assets/images/doc.png') }}">
            </div>

        </div>
    </section>



    <div class="slideshow-container w-full">
        <div>
            @foreach ($posts as $post)
                <div class="mySlides1 w-10/12 mx-auto">
                    <div class="flex">
                        <div class="flex bg-blue-500 p-4 rounded-lg">
                            <div class="flex flex-col w-2/3 pr-4 bg">
                                <p class="text-2xl font-black mb-2 text-gray-50">{{ $post->title }}</p>
                                <p class="text-lg font-light leading-5 text-gray-300">{{ $post->description }}.</p>
                                <p class="text-lg font-light leading-5 text-gray-300 mt-6">{{ $post->user->nom }}</p>
                                {{-- <p>{{ $post->user->medecin->specialite->specialite }}</p> --}}

                                <div class="flex h-full items-end text-gray-300 hover:text-gray-50">
                                    <button class="text-sm font-semibold flex items-center space-x-2">
                                        <span>BOOK NOW</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <img class="w-full hover:animate-bounce rounded-lg"
                                    src="{{ asset('storage/' . $post->image) }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>



    <script src="{{ asset('assets/js/slider.js') }}"></script>
@endsection
