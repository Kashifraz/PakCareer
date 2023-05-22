@php
use App\models\MetaAnswer;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden">

                <div class=" p-6 mx-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Question asked by {{$question->user->name}} <span class="text-muted text-lg font-normal "> at {{date('Y/m/d H:i:s',strtotime($question->created_at))}} </span></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-800">{{$question->question_text}} </p>

                    @if(count($answers) > 0 )
                    @foreach ($answers as $answer)
                    <div class=" mt-8 p-6 mx-6 bg-white border-l-4 border-indigo-500 rounded-lg shadow">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Answer posted by {{$answer->user->name}} <span class="text-muted text-lg font-normal "> at {{date('Y/m/d H:i:s',strtotime($answer->created_at))}} </span></h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 ">{{$answer->answer_text}} </p>
                        @php
                        $user_id = auth()->user()->id;
                        $upvoted = MetaAnswer::where('answer_id',$answer->id)
                        ->where('user_id', auth()->user()->id)
                        ->where('is_upvoted',true)->get();
                        $downvoted = MetaAnswer::where('answer_id',$answer->id)
                        ->where('user_id', auth()->user()->id)
                        ->where('is_downvoted',true)->get();
                        @endphp
                        @if (count($upvoted) == 0 && count($downvoted) == 0)
                        <a href="{{route('count.upvote',['answer' => $answer->id, 'user' => auth()->user()->id] )}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </a>
                        <a href="{{route('count.downvote',['answer' => $answer->id, 'user' => auth()->user()->id] )}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-down"></i>
                        </a>
                        @endif
                        @if(count($upvoted) != 0 && count($downvoted) == 0)
                        <a class="inline-flex items-center  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-up"></i>&nbsp; upvoted
                        </a>
                        <a href="{{route('count.downvote',['answer' => $answer->id, 'user' => auth()->user()->id] )}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-down"></i>
                        </a>
                        @endif
                        @if(count($upvoted) == 0 && count($downvoted) != 0)
                        <a href="{{route('count.upvote',['answer' => $answer->id, 'user' => auth()->user()->id] )}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </a>
                        <a class="inline-flex items-center  px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                            <i class="fa-solid fa-thumbs-up"></i>&nbsp; downvoted
                        </a>
                        @endif

                        @php
                        $Total_upvotes = MetaAnswer::where('answer_id',$answer->id)
                        ->where('is_upvoted',true)->get();
                        $Total_downvotes = MetaAnswer::where('answer_id',$answer->id)
                        ->where('is_downvoted',true)->get();
                        @endphp
                        <span class="underline mx-3"> {{count($Total_upvotes)}} upvote(s) and {{count($Total_downvotes)}} downvote(s).</span>

                    </div>
                    @endforeach
                    @else
                    <p class="mx-7 text-gray-500">no answers posted yet</p>
                    @endif


                    <div class="p-6 text-gray-900">
                        <form method="post" action="{{route('post.answer')}}">
                            @csrf
                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
                                <div class="px-4 py-2 bg-white rounded-t-lg">
                                    <textarea id="answer" rows="4" name="answer" class="w-full px-0 text-sm text-gray-900 bg-white border-0 " placeholder="Write an Answer..." required></textarea>
                                    <x-input-error :messages="$errors->get('answer')" class="mt-2" />
                                </div>
                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <div class="flex items-center justify-between px-3 py-2 border-t">
                                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200">
                                        Post Answer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.reply').click(function() {
                var form_id = "#reply" + $('.reply').attr('id');
                $(form_id).removeClass('hidden');
            });
        });
    </script>

</x-app-layout>