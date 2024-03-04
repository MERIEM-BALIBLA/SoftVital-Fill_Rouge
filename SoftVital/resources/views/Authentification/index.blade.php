@extends('Layouts.app')
@section('content')

    <body>
        <section class="flex md:flex-row my-16 flex-col mx-auto justify-center">
            <div class="md:w-2/3 w-full flex flex-col items-center justify-center md:text-left text-center">

                <div class="w-full bg-white rounded-lg dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Espace Patients
                        </h1>

                        <form action="{{ route('login') }}" class="md:space-y-6" action="#">
                            @csrf
                            @method('POST')
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                        <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <div>
                                <a href="{{route('forget_password')}}">J'ai oublié le mot de passe</a>
                            </div>

                            <div class="mx-auto w-all">
                                <button
                                    class="group relative h-12 w-full overflow-hidden rounded-lg bg-white text-lg shadow">
                                    <div
                                        class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                                    </div>
                                    <span class="relative text-black group-hover:text-white">Se connecter</span>
                                </button>
                            </div>

                        </form>
                        <div class="mx-auto w-all" id="register-btn">
                            <button id="register-btn"
                                class="group relative h-12 w-full overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-slate-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <span class="relative text-black group-hover:text-white">Inscrivez-vous</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/3 w-full flex flex-col items-center justify-center md:text-left text-center">

                <div class="w-full bg-white rounded-lg dark:border dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Espace Professionnels
                        </h1>

                        {{-- <form action="{{ route('login') }}" class="space-y-4 md:space-y-6" action="#">
                            @csrf
                            @method('POST')
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required="">
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                        <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <div class="mx-auto w-all">
                                <button
                                    class="group relative h-12 w-full overflow-hidden rounded-lg bg-white text-lg shadow">
                                    <div
                                        class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                                    </div>
                                    <span class="relative text-black group-hover:text-white">Se connecter</span>
                                </button>
                            </div>

                        </form> --}}
                        <div class="mx-auto w-all" id="registerM-btn">
                            <button id="register-btn"
                                class="group relative h-12 w-full overflow-hidden rounded-lg bg-white text-lg shadow">
                                <div
                                    class="absolute inset-0 w-3 bg-slate-400 transition-all duration-[250ms] ease-out group-hover:w-full">
                                </div>
                                <span class="relative text-black group-hover:text-white">Inscrivez-vous</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @if ($errors->any())
            <div class="alert alert-danger bg-red-200 text-red-800 p-4 mb-4">
                {{-- <strong>Whoops!</strong> There were some problems with your input.<br><br> --}}
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <?php
            // Décoder le texte HTML encodé
            $errorMessage = stripslashes(session('error'));
            ?>
            <script>
                alert("{{ $errorMessage }}");
            </script>
        @endif

        {{-- Register Modal PATIENT --}}
        <section id="register-popup" class="hidden">
            <div id="register-popup" tabindex="-1"
                class="bg-black/50 fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">
                {{-- <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow">
                <button id="register-popup-close" type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                        aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            cliprule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close popup</span>
                </button>

                <div class="p-5">
                    <h3 class="text-2xl mb-0.5 font-medium"></h3>
                    <p class="mb-4 text-sm font-normal text-gray-800"></p>

                    <div class="text-center">
                        <p class="mb-3 text-2xl font-semibold leading-5 text-slate-900">
                            Get Started Now
                        </p>

                    </div>

                    <form action="{{ route('register') }}" method="POST" class="w-full p-4">
                        @csrf
                        @method("post")

                        <input type="" name="role" value="patient">

                        <div class="border 2"><input class="boreder" type="text" name="nom"></div>
                        
                        <div class="border 2"><input type="text" name="cin"></div>

                        <div class="border 2"><input type="text" name="numero"></div>

                        <div class="border 2"><select name="ville">
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select></div>

                        <div class="border 2"><input type="email" name="email"></div>

                        <div class="border 2"><input type="password" name="password"></div>

                        <div class="border 2"><input type="password" name="password_confirmation"></div>

                        <button type="submit" name="submit" class="inline-flex mt-2 bg-blue-900 w-full items-center justify-center rounded-lg p-2 py-3 text-sm font-medium text-white outline-none">
                            Register
                        </button>
                    </form>

                </div>
            </div>
        </div> --}}
                <div class="w-2/3 bg-white border-4 rounded-lg shadow relative m-10">

                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            Creer votre compte ici
                        </h3>
                        <button id="register-popup-close" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="product-modal">
                            <svg id="register-popup-close" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6 space-y-6">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('post')
                            <div class="grid grid-cols-6 gap-6">
                                <input type="hidden" name="role" value="patient">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Nom
                                        d'utilisateur :</label>
                                    <input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="nom d'utilisation" type="text" name="nom">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">CIN
                                        :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="votre cin" type="text" name="cin">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Numéro de
                                        téléphone :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="numéro de téléphone" type="text" name="numero">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Ville
                                        :</label><select
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        name="ville">
                                        @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Email
                                        :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="email" name="email">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Mot de
                                        passe :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="password">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Confirmer
                                        le mot de passe :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="password_confirmation">
                                </div>

                            </div>
                            <div class="p-6 border-t border-gray-200 rounded-b">
                                <button
                                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>


        {{-- Register Modal MEDECIN --}}
        <section id="registerM-popup" class="hidden">
            <div id="register-popup" tabindex="-1"
                class="bg-black/50 fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">

                <div class="w-2/3 bg-white border-4 rounded-lg shadow relative m-10">

                    <div class="flex items-start justify-between p-5 border-b rounded-t">
                        <h3 class="text-xl font-semibold">
                            Vous êtes praticien ? Un de nos conseillers vous recontacte
                        </h3>
                        <button id="registerM-popup-close" type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-toggle="product-modal">
                            <svg id="register-popup-close" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6 space-y-6">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('post')
                            <div class="grid grid-cols-6 gap-6">
                                <input type="hidden" name="role" value="medecin">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Titre
                                        :</label>
                                    <input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="nom d'utilisation" type="text" name="nom">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">CIN
                                        :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="votre cin" type="text" name="cin">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Ville
                                        :</label><select
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        name="ville">
                                        @foreach ($villes as $ville)
                                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Email
                                        :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="email" name="email">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Mot de
                                        passe :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="password">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Confirmer
                                        le mot de passe :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="password_confirmation">
                                </div>


                                <div class="col-span-full px-20">
                                    <hr class="border-6 border-gray-300">
                                </div>


                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Spécialité
                                        :</label>
                                    <select
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        name="specialite" id="">
                                        <option value="">rien</option>
                                        @foreach ($specialites as $specialite)
                                            <option value="{{ $specialite->id }}">{{ $specialite->specialite }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Nom du
                                        cabinet :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="cabinet">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Numéro de
                                        téléphone :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        placeholder="numéro de téléphone" type="text" name="numero">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="text-sm font-medium text-gray-900 block mb-2">Addresse
                                        :</label><input
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                        type="password" name="adresse_cabinet">
                                </div>


                            </div>
                            <div class="p-6 border-t border-gray-200 rounded-b">
                                <button
                                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>

        <script>
            // patient
            document.getElementById('register-btn').addEventListener('click', function() {
                document.getElementById('register-popup').classList.remove('hidden')
            });
            document.getElementById('register-popup-close').addEventListener('click', function() {
                document.getElementById('register-popup').classList.add('hidden');
            });

            // medecin
            document.getElementById('registerM-btn').addEventListener('click', function() {
                document.getElementById('registerM-popup').classList.remove('hidden')

            });
            document.getElementById('registerM-popup-close').addEventListener('click', function() {
                document.getElementById('registerM-popup').classList.add('hidden');
            });
        </script>
    </body>
@endsection
