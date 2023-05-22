<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
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


            <div class="w-full max-w-5xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 ">Latest Student Messages</h5>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200">
                        @if($messages->count() > 0 )
                        @foreach ($messages as $message )
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    @if ($message->user->profile->profile_image != "NA")
                                    <img class="w-12 h-12 rounded-full" src="{{ asset('images/'.$message->user->profile->profile_image)}}">
                                    @else
                                    <img class="w-12 h-12 rounded-full" src="{{ asset('images/avatar.png')}}">
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-md font-medium text-gray-900 truncate ">
                                        <b>{{$message->user->name}} </b>| {{$message->user->profile->profession}}
                                    </p>
                                    <p class="text-md text-gray-500 truncate">
                                        {{$message->message_text}}
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                    <a href="{{route('message',[$message->student_id, $message->counselor_id])}}" class="float-right inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                        <i class="fa fa-arrow-right "></i></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>