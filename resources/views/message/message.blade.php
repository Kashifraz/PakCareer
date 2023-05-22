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

            <!-- @if(Session::has('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-3" role="alert">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif -->

            @if($messages->count() > 0 )
            @foreach ($messages as $message )
            @if(Auth::user()->id == $message->user_id)
            <section class="mb-2 border p-6 bg-blue-100 shadow sm:rounded-lg mb-5">
                <div class="mx-auto">
                    <div class="card md:flex max-w-4xl">
                        <div class="w-10 h-10 mx-auto mb-6 md:mr-6 flex-shrink-0">
                            @if ($message->user->profile->profile_image != "NA")
                            <img class="object-cover rounded-full" src="{{ asset('images/'.$message->user->profile->profile_image)}}">
                            @else
                            <img class="object-cover rounded-full" src="{{ asset('images/avatar.png')}}">
                            @endif
                        </div>
                        <div class="flex-grow text-center md:text-left">
                            @if(Auth::user()->id == $message->user_id)
                            <p class="text-md mb-2"><b> Your Message</b></p>
                            @else
                            <p class="text-md mb-2"><b>{{$message->user->name}} </b>| {{$message->user->profile->profession}}</p>
                            @endif
                            <p class="mt-2 mb-3">{{$message->message_text}}</p>
                        </div>
                    </div>
                </div>
            </section>
            @else

            <section class="mb-2 border p-6 bg-green-100 shadow sm:rounded-lg mb-5">
                <div class="mx-auto">
                    <div class="card md:flex max-w-4xl">
                        <div class="flex-grow text-center ">
                            @if(Auth::user()->id == $message->user_id)
                            <p class="text-md mb-2 md:text-right"><b> You </b></p>
                            @else
                            <p class="text-md mb-2 md:text-right"><b>{{$message->user->name}} </b>| {{$message->user->profile->profession}}</p>
                            @endif
                            <p class="mt-2 mb-3 md:text-right">{{$message->message_text}}</p>
                        </div>
                        <div class="w-10 h-10  mb-6 md:ml-6 flex-shrink-0 right-0">
                            @if ($message->user->profile->profile_image != "NA")
                            <img class="object-cover rounded-full" src="{{ asset('images/'.$message->user->profile->profile_image)}}">
                            @else
                            <img class="object-cover rounded-full" src="{{ asset('images/avatar.png')}}">
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endif
            @endforeach
            @else
            <section class="mb-2 border p-6 bg-white shadow sm:rounded-lg mb-5">
                <div class="mx-auto">
                    <div class="card md:flex max-w-4xl">
                        <p>Send a private message!</p>
                    </div>
                </div>
            </section>

            @endif
            <div class="fixed bottom-0 max-w-4xl w-full ml-8">
                <form action="{{route('message.post')}}" method="POST">
                    @csrf
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-white">
                        <input type="hidden" name="student_id" value={{$student_id}}>
                        <input type="hidden" name="counselor_id" value={{$counselor_id}}>
                        <textarea id="message_text" name="message_text" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Your message..."></textarea>
                        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100">
                            <svg aria-hidden="true" class="w-6 h-6 rotate-90" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>