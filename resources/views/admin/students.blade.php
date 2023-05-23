<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students List') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden">
                @if(Session::has('success'))
                <div class=" max-w-4xl mx-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-4 " role="alert">
                    <p>{{ Session::get('success') }}</p>
                </div>
                @endif
            </div>


            <div class="relative overflow-x-auto sm:px-6 lg:px-8">
            <div class="flex items-center mt-4 justify-between pb-4 right-0 float-right">
                    <form action="{{route('admin.students')}}" method="POST" class="flex items-center mb-5">
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
                </div>
                <table class="w-full text-md mt-4 text-left text-gray-500 rounded-lg shadow ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>

                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Profession
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($students) > 0)
                        @foreach ($students as $student )
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">
                                @php
                                $profile_image = $student->profile->profile_image;
                                @endphp
                               <p class="flex inline">
                                @if ($profile_image!='NA')
                                <img class="w-8 h-8 rounded-full" src="{{ asset('images/'.$profile_image)}}">
                                @else
                                <img class="w-8 h-8 rounded-full" src="{{ asset('images/avatar.png')}}">
                                @endif
                                <a class="hover:underline" href="{{route('profile.show', $student->id )}}"><b class="mt-2 ml-3">{{$student->name}}</b></a>
                                </p>
                            </td>
                            <td class="px-6 py-4">
                                {{$student->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$student->profile->profession}}
                            </td>

                            <td class="px-6 py-4">
                                <a href="{{route('delete.students', $student->id)}}" class="font-medium text-lg text-red-600  ml-3">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="mt-6">{{$students->links()}}</div>
            </div>

        </div>
    </div>

</x-app-layout>