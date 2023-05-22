<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Discussion') }}
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
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{route('ask.question')}}">
                        @csrf
                        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 ">
                            <div class="px-4 py-2 bg-white rounded-t-lg ">
                                <label for="question" class="sr-only">Your comment</label>
                                <textarea id="question" rows="4" name="question" class="w-full px-0 text-sm text-gray-900 bg-white border-0" placeholder="Write a Question..." required></textarea>
                                <x-input-error :messages="$errors->get('question')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-between px-3 py-2 border-t">
                                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200">
                                    Ask Question
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if(count($questions) > 0 )
                @foreach ($questions as $question)
                <div class=" p-6 mx-6 mb-5 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex items-center space-x-4 mb-5">
                        @php
                        $profile_image = $question->user->profile->profile_image;
                        @endphp
                        @if ($profile_image!='NA')
                        <img class="w-12 h-12 rounded-full" src="{{ asset('images/'.$profile_image)}}">
                        @else
                        <img class="w-12 h-12 rounded-full" src="{{ asset('images/avatar.png')}}">
                        @endif
                        <div class="font-medium text-md">
                            <div>Asked by <b>{{$question->user->name}}</b></div>
                            <div class="text-sm text-gray-500 ">{{date('Y/m/d H:i:s',strtotime($question->created_at))}}</div>
                        </div>
                    </div>
                    <hr>

                    <!-- <h5 class="mt-5 mb-2 text-xl font-bold tracking-tight text-gray-900 ">Question asked by {{$question->user->name}}</h5> -->

                    <p class="mb-5 font-normal text-lg text-gray-700 p-5 bg-gray-50 rounded-lg">{{$question->question_text}} </p>
                    <a href="{{route('show.question',$question->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <i class="fa fa-eye "></i>
                    </a>
                    @if (Auth::user()->id == $question->user->id)
                    <a href="{{route('question.destroy',$question->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                        <i class="fa fa-trash "></i>
                    </a>
                    @endif
                    <div class="inline ml-4 text-mb text-gray-500 underline ">{{count($question->answers)}} answers to this question</div>
                </div>
                @endforeach
                @else
                <p class="mx-7 text-gray-500">no questions asked yet</p>
                @endif

            </div>
            <div class="p-8 text-center">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>