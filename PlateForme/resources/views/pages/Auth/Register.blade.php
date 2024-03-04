@extends('pages.Layouts.navigation')
@section('content')
<div class="relative py-16 bg-gradient-to-br from-sky-50 to-gray-200">  
  <div class="relative container m-auto px-6 text-gray-500 md:px-12 xl:px-40">
      <div class="m-auto md:w-8/12 lg:w-6/12 xl:w-6/12">
          <div class="rounded-xl bg-white shadow-xl">
              <div class="p-6 sm:p-16">
                  <div class="space-y-4">
                      <img src="https://tailus.io/sources/blocks/social/preview/images/icon.svg" loading="lazy" class="w-10" alt="tailus logo">
                      <h2 class="mb-8 text-2xl text-cyan-900 font-bold">Inscription Professionnel de Santé</h2>
                  </div>

                <form action="{{route('Form.Register')}}" method="POST">
                  @csrf
                  <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="nom" placeholder="Nom *" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="prenom" placeholder="Prénom *" />
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="email" name="email" placeholder="Adresse email *" />
                   
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="password" name="password" placeholder="mot de passe *" />
                  </div>
                  <div class="mt-2">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="specialite" placeholder="Spésialité *" />
                  </div>
                  <div class="mt-2">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="telephone" placeholder="Téléphone portable *" />
                  </div>
                  <div class="mt-2">
                    <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text" name="adresse" placeholder="Code postal cabinet *" />
                  </div>
                  <div><p class="mt-2 space-y-4 text-gray-600 sm:-mb-8">* Champs obligatoires</p></div>
                  <div>
                  <button type="submit" class="mt-10 inline-block rounded bg-primary px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Inscrivez-vous ici</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection