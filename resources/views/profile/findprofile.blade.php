<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Counselors') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 ">
            @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-orange-700 p-4 mb-3" role="alert">
                <p class="font-bold text-lg">Errors while processing request.</p>
                <ul class="max-w-md space-y-1 list-disc list-inside ">
                    @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(Session::has('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-3" role="alert">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif

            <form action="{{route('counselors.show')}}" method="POST" class="flex items-center mb-5">
                @csrf
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-search"></i>
                    </div>
                    <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search Counselors...">

                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                    Search
                </button>
            </form>


            @if($counselors->count() > 0 )
            @foreach ($counselors as $counselor )
            <section class="mb-2 border p-6 bg-white shadow sm:rounded-lg mb-5">
                <div class="mx-auto">
                    <div class="card md:flex max-w-4xl">
                        <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                            @if ($counselor->profile->profile_image != "NA")
                            <img class="object-cover rounded-full" src="{{ asset('images/'.$counselor->profile->profile_image)}}">
                            @else
                            <img class="object-cover rounded-full" src="{{ asset('images/avatar.png')}}">
                            @endif
                        </div>
                        <div class="flex-grow text-center md:text-left">
                            <p class="text-md">{{$counselor->profile->profession}}
                                <a href="{{route('profile.show',$counselor->profile->id)}}" class="float-right inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                    <i class="fa fa-arrow-right "></i></span>
                                </a>
                            </p>
                            <h3 class="text-2xl heading">{{$counselor->name}}</h3>
                            <p class="mt-2 mb-3">{{$counselor->profile->intro}}</p>
                            <div>

                                @foreach ($counselor->profile->skills as $skill )
                                <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{$skill->skill_title}}</span>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            @endforeach
            @else
            <p>No counselors found!</p>
            @endif
            {{ $counselors->links() }}
        </div>

    </div>
    </div>
</x-app-layout>