@include('medecin.Layout.app')

<section class="text-gray-600 body-font mt-8 px-6">
    <div class="mx-auto">
        <div class="relative bg-white w-full h-40 rounded-lg shadow-lg flex gap-5 p-5">
            {{-- <button class="absolute top-6 right-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
                    <path fill="black"
                        d="M25 4.031c-.766 0-1.516.297-2.094.875L13 14.781l-.219.219l-.062.313l-.688 3.5l-.312 1.468l1.469-.312l3.5-.688l.312-.062l.219-.219l9.875-9.906A2.968 2.968 0 0 0 25 4.03zm0 1.938c.234 0 .465.12.688.343c.445.446.445.93 0 1.375L16 17.376l-1.719.344l.344-1.719l9.688-9.688c.222-.222.453-.343.687-.343zM4 8v20h20V14.812l-2 2V26H6V10h9.188l2-2z" />
                </svg>
            </button> --}}
            <button id="editButton" class="absolute top-6 right-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
                    <path fill="black"
                        d="M25 4.031c-.766 0-1.516.297-2.094.875L13 14.781l-.219.219l-.062.313l-.688 3.5l-.312 1.468l1.469-.312l3.5-.688l.312-.062l.219-.219l9.875-9.906A2.968 2.968 0 0 0 25 4.03zm0 1.938c.234 0 .465.12.688.343c.445.446.445.93 0 1.375L16 17.376l-1.719.344l.344-1.719l9.688-9.688c.222-.222.453-.343.687-.343zM4 8v20h20V14.812l-2 2V26H6V10h9.188l2-2z" />
                </svg>
            </button>

            <div id="editModal" class="z-50 fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center hidden">
                <form action="{{ route('uploadProfileImage') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label for="uploadFile1" class="bg-white text-black text-base rounded w-80 h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 mb-2 fill-black" viewBox="0 0 32 32">
                            <path d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z" data-original="#000000" />
                            <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z" data-original="#000000" />
                        </svg>
                        Upload file
                        <input type="file" name="image" id='uploadFile1' class="hidden" />
                        <p class="text-xs text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                    </label>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
            

            <div class="">
                <img class="w-full h-full object-cover" src="{{ asset('storage/' . $user->image) }}" alt="">
            </div>
            <div>
                <h1>{{ ucfirst(substr(auth()->user()->nom, 0, 1)) . substr(auth()->user()->nom, 1) }}</h1>
                <p>{{ $user->medecin->specialite->specialite }}</p>
            </div>
        </div>
        <div class="w-full flex mt-4 gap-7">

            <div class="relative w-1/2 bg-white overflow-hidden shadow rounded-lg border">

                <button class="absolute top-6 right-6" id="personne-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
                        <path fill="black"
                            d="M25 4.031c-.766 0-1.516.297-2.094.875L13 14.781l-.219.219l-.062.313l-.688 3.5l-.312 1.468l1.469-.312l3.5-.688l.312-.062l.219-.219l9.875-9.906A2.968 2.968 0 0 0 25 4.03zm0 1.938c.234 0 .465.12.688.343c.445.446.445.93 0 1.375L16 17.376l-1.719.344l.344-1.719l9.688-9.688c.222-.222.453-.343.687-.343zM4 8v20h20V14.812l-2 2V26H6V10h9.188l2-2z" />
                    </svg>
                </button>

                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Information personnelle
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This is some information about the user.
                    </p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Full name
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->nom }}
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Phone number
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->numero }}
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Email address
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->email }}
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                ville
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->ville->nom }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="relative w-1/2 bg-white overflow-hidden shadow rounded-lg border">
                <button class="absolute top-6 right-6" id="profession-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32">
                        <path fill="black"
                            d="M25 4.031c-.766 0-1.516.297-2.094.875L13 14.781l-.219.219l-.062.313l-.688 3.5l-.312 1.468l1.469-.312l3.5-.688l.312-.062l.219-.219l9.875-9.906A2.968 2.968 0 0 0 25 4.03zm0 1.938c.234 0 .465.12.688.343c.445.446.445.93 0 1.375L16 17.376l-1.719.344l.344-1.719l9.688-9.688c.222-.222.453-.343.687-.343zM4 8v20h20V14.812l-2 2V26H6V10h9.188l2-2z" />
                    </svg>
                </button>

                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        User Profile
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This is some information about the user.
                    </p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Spécialité
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->medecin->specialite->specialite }}
                            </dd>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Nom du cabinet
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->medecin->cabinet }}
                            </dd>
                        </div>
                    
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Adresse
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $user->medecin->adresse_cabinet }}
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>

        </div>
</section>

{{-- information personnelle popup --}}
<div id="personne-popup"
    class="fixed hidden z-50 inset-0 bg-gray-500 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white w-1/2">

        <div class="flex justify-end p-2">
            <button id="personne-close" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class=" p-6 pt-0 text-center">
            <form action="{{ route('update_InfoPersonnelle') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex gap-4">
                    <input type="text" name="nom"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Full Name *" value="{{ auth()->user()->nom }}" />
                    <input type="email" name="email"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Email *" value="{{ auth()->user()->email }}" />
                </div>
                <div class="w-full mt-7">
                    <input type="text" name="numero"
                        class="mt-1 block w-full rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Phone Number *" value="{{ auth()->user()->numero }}" />
                </div>

                <button type="submit"
                    class="px-8 py-4 bg-blue-500 rounded-lg text-white text-xl hover:bg-blue-400 mt-8" required>
                    Enregistrer
                </button>

            </form>

        </div>

    </div>
</div>

{{-- informations professionnelle popup --}}
<div id="profession-popup"
    class="fixed hidden z-50 inset-0 bg-gray-500 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
    <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white w-1/2">

        <div class="flex justify-end p-2">
            <button id="profession-close" type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div class=" p-6 pt-0 text-center">
            <form action="{{ route('updateProffesionInfo') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex gap-4">


                    <select name="specialite"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
                        <option value="{{ $user->medecin->specialite_id }}">
                            {{ $user->medecin->specialite->specialite }}</option>
                        @foreach ($specialites as $specialite)
                            <option value="{{ $specialite->id }}">{{ $specialite->specialite }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="cabinet"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Email *" value="{{ $user->medecin->cabinet }}" />
                </div>
                <div class="flex gap-4">
                    {{-- <input type="text" name="nom"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Full Name *" value="{{ auth()->user()->nom }}" /> --}}
                    <input type="text" name="adresse"
                        class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder-font-semibold placeholder-text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm"
                        placeholder="Email *" value="{{ $user->medecin->adresse_cabinet }}" />
                </div>

                <button type="submit"
                    class="px-8 py-4 bg-blue-500 rounded-lg text-white text-xl hover:bg-blue-400 mt-8" required>
                    Enregistrer
                </button>

            </form>


        </div>

    </div>
</div>

<script>
    document.getElementById('personne-btn').addEventListener('click', function() {
        document.getElementById('personne-popup').classList.remove('hidden');
    });
    document.getElementById('personne-close').addEventListener('click', function() {
        document.getElementById('personne-popup').classList.add('hidden');
    });

    document.getElementById('profession-btn').addEventListener('click', function() {
        document.getElementById('profession-popup').classList.remove('hidden');
    });
    document.getElementById('profession-close').addEventListener('click', function() {
        document.getElementById('profession-popup').classList.add('hidden');
    });
</script>

<script>
    document.getElementById('editButton').addEventListener('click', function() {
        document.getElementById('editModal').classList.remove('hidden');
    });
    window.addEventListener('click', function(event) {
        var editModal = document.getElementById('editModal');
        if (event.target == editModal) {
            editModal.classList.add('hidden');
        }
    });
</script>
