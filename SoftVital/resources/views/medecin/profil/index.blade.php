@include('Layouts.head')
@include('Layouts.navebarre')

<div class="px-16 py-6 bg-slate-100">
    <div class="p-8 bg-white shadow mt-24">
        <div class="relative">
            <div
                class="w-48 h-48 bg-indigo-100 mx-auto rounded-full shadow-xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                <img alt="content" class="object-cover object-center " src="{{ asset('assets/images/calender.png') }}">
            </div>
        </div>
        <div class="text-center border-b pb-8 mt-28">
            <h1 class="text-4xl font-medium text-gray-700">
                {{ ucfirst(substr(auth()->user()->nom, 0, 1)) . substr(auth()->user()->nom, 1) }} ,</h1>
            <p class="font-light text-gray-600 mt-3">{{ $user->medecin->specialite->specialite }}</p>
        </div>
        <div class="mt-12 flex gap-4">
            <div class="w-1/4">
                @foreach($medecins as $medecin)
                    <div
                      class="mb-4 py-10 bg-gray-100 dark:bg-gray-700 relative shadow-lg overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
                      <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
                        class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform"
                      />
                        <div class="w-fit transition-all transform duration-500">
                          <h1 class="text-gray-600 dark:text-gray-200 font-bold">
                            {{ $medecin->nom }} 
                          </h1>
                          <p class="text-gray-400">{{ $medecin->medecin->cabinet }}</p>
                        
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full">
                <div class="rouded-lg shadow-lg px-8 py-10">
                    <h2>Mes informations personnelles</h2>
                    <h4>Email: {{ $user->email }}</h4>
                    <h4>Numéro de téléphone: {{ $user->numero }}</h4>
                    <h4>Originaire de: {{ $user->ville->nom }}</h4>
                </div>
                <div class="rouded-lg shadow-lg mt-8 px-8 py-10">
                    <h2>Les informations de mon cabinet</h2>
                    <h4>Le nom du cabinet: {{ $user->medecin->cabinet }}</h4>
                    <h4>L'adresse du cabinet: </h4>
                </div>
                <div class="rouded-lg shadow-lg mt-8 px-8 py-10">
                    <h2>Mes derniers poste</h2>
                    {{-- <div class="flex flex-col sm:flex-row gap-8"> --}}
                    @foreach ($posts as $post)
                        <!-- Blog post with featured image -->
                        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
                            <div>
                                <div class="py-8">
                                    <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
                                    <p class="text-gray-500 text-sm">Publié le <time
                                            datetime="2022-04-05">{{ $post->created_at }}</time></p>
                                </div>
                                <div class="h-24">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="h-full">
                                </div>

                                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                                    <p>{!! $post->description !!}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
{{-- </div> --}}
{{-- @endsection --}}
