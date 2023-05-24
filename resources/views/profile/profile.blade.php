<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
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


            <!-- first row -->
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if(Auth::user()->id == $profile->user->id)
                <div class="flex justify-end px-4 ">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500" onclick="profileModal(true)" type="button">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </div>
                @endif
                <div class="grid grid-cols-3 gap-4 ">
                    <div class="border-r-2 border-grey-500">
                        <div class="max-w-xl">
                            <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
                                <div class="w-full max-w-sm  ">
                                    <div class="flex flex-col items-center pb-10">
                                        @if ($profile->profile_image != "NA")
                                        <img class="w-32 h-32 mb-2 mt-4 rounded-full shadow-lg" src="{{ asset('images/'.$profile->profile_image)}}" />
                                        @else
                                        <img class="w-32 h-32 mb-2 mt-4 rounded-full shadow-lg" src="{{ asset('images/avatar.png')}}" />
                                        @endif
                                        <h5 class="mb-1 text-xl text-center font-medium text-gray-900 ">{{$profile->user->name}}</h5>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">{{$profile->profession}}</span>
                                        @if($profile->user->verified)
                                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 mt-3 px-2.5 py-0.5 rounded ">
                                            <i class="fa-solid fa-check"></i> Verified</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2 p-6">
                        <h5 class="mb-1 text-xl font-bold text-lg text-gray-900  ">Profile Summary</h5>
                        <p class="mb-3 text-gray-500 text-lg dark:text-gray-400">{{$profile->intro}}</p>
                        @if(auth::user()->id != $profile->user->id)
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="{{route('message',[Auth::user()->id,$profile->user->id])}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200">Message Now</a>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
            <!-- second row -->
            <div class="mt-6 ">
                <div class="grid grid-cols-2 gap-4 ">
                    <div class="border-r-2 border-grey-500 bg-white shadow sm:rounded-lg">
                        <!-- Education -->
                        <div class="w-full p-8  ">
                            <div class="flex items-center justify-between mb-4 divide-y divide-gray-200">
                                <h5 class="text-xl font-bold leading-none text-gray-900 ">Education</h5>
                                @if(Auth::user()->id == $profile->user->id)
                                <button class="text-sm font-medium text-blue-600 hover:underline" onclick="educationModal(true)">
                                    Add New
                                </button>
                                @endif
                            </div>
                            <div class="flow-root ">
                                <ul role="list" class="divide-y divide-gray-200 ">
                                    @if(count($profile->educations) > 0)
                                    @foreach ($profile->educations as $education )
                                    <li class="py-3 sm:py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="flex-shrink-0">
                                                <i class="fa-solid fa-graduation-cap text-5xl"></i>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate ">
                                                    {{ $education->degree_title}} with {{$education->grade}}% result
                                                </p>
                                                <p class="text-sm text-gray-500 truncate ">
                                                    {{ $education->institution}}
                                                </p>
                                                <p class="text-sm text-gray-500 truncate ">
                                                    {{ $education->duration}} Years Program
                                                </p>

                                            </div>
                                            <div class="inline-flex items-center text-base font-semibold text-gray-900 ">

                                                <p class="text-sm text-muted text-gray-500 truncate ">
                                                    @if ( $education->IsComplete )
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                                                        Completed
                                                    </span>
                                                    @else
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                                                        In Progress
                                                    </span>
                                                    @endif
                                                </p>
                                                @if(Auth::user()->id == $education->profile->user->id)
                                                <form method="POST" action="{{route('education.destroy',$education->id)}}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="text-gray-100 text-xs bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  rounded-full  px-2 py-1 mr-2  ">
                                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    @else
                                    <p>No education information to show</p>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Experience -->
                    <div class=" bg-white shadow sm:rounded-lg">
                        <div class="flex justify-end ">
                            <div class="w-full p-8  ">
                                <div class="flex items-center justify-between mb-4 divide-y divide-gray-200">
                                    <h5 class="text-xl font-bold leading-none text-gray-900 ">Experience</h5>
                                    @if(Auth::user()->id == $profile->user->id)
                                    <button class="text-sm font-medium text-blue-600 hover:underline" onclick="experienceModal(true)">
                                        Add New
                                    </button>
                                    @endif
                                </div>
                                <div class="flow-root ">
                                    <ul role="list" class="divide-y divide-gray-200 ">

                                        @if(count($profile->experiences) > 0)
                                        @foreach ($profile->experiences as $experience )
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <i class="fa-sharp fa-solid fa-briefcase text-5xl"></i>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="text-sm font-medium text-gray-900 truncate ">
                                                        {{ $experience->job_title}}
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate ">
                                                        {{ $experience->company_name}}
                                                    </p>
                                                </div>
                                                <div class="inline-flex items-center text-base font-semibold text-gray-900 ">
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded ">
                                                        {{ $experience->duration}} Years
                                                    </span>
                                                    @if(Auth::user()->id == $experience->profile->user->id)
                                                    <form method="POST" action="{{route('experience.destroy',$experience->id)}}">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <button type="submit" class="text-gray-100 text-xs bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  rounded-full  px-2 py-1 mr-2  ">
                                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        @else
                                        <p>No experience information to show</p>
                                        @endif

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Third row -->
            <div class="mt-6 p-8 border-grey-500 bg-white shadow sm:rounded-lg">
                <div class="grid grid-cols-3 gap-4  ">
                    <!-- Skills -->

                    <div class="col-span-3">
                        <div class="flex items-center justify-between mb-4 divide-y divide-gray-200">
                            <h5 class="text-xl font-bold leading-none text-gray-900 ">Skills</h5>
                            @if(Auth::user()->id == $profile->user->id)
                            <button class="text-sm font-medium text-blue-600 hover:underline" onclick="skillModal(true)">
                                Add New
                            </button>
                            @endif
                        </div>
                        <div class="w-full  ">
                            @if(count($profile->skills) > 0)
                            @foreach ($profile->skills as $skill )

                            @if($skill->proficiency_score > 85 )
                            <div class="grid grid-cols-12 gap-4 p-3">
                                <div class="col-span-11">
                                    <div class="mb-1 text-base font-medium text-green-700 ">
                                        <?php $percentage = "width:" . $skill->proficiency_score . "%" ?>
                                        <h5> <i class="fa-solid fa-star"></i> {{$skill->skill_title}} - {{$skill->proficiency_score}}% proficiency</h5>
                                    </div>

                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 ">
                                        <div class="bg-green-600 h-2.5 rounded-full" style="{{$percentage}}"></div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    @if(Auth::user()->id == $skill->profile->user->id)
                                    <form method="POST" action="{{route('skill.destroy',$skill->id)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="text-gray-100 text-xs mt-5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  rounded-full  px-2 py-1 mr-2  ">
                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            @endif

                            @if($skill->proficiency_score > 65 && $skill->proficiency_score < 85 ) <div class="grid grid-cols-12 gap-4 p-3">
                                <div class="col-span-11">
                                    <div class="mb-1 text-base font-medium text-blue-700 ">
                                        <?php $percentage = "width:" . $skill->proficiency_score . "%" ?>
                                        <h5> <i class="fa-solid fa-star"></i> {{$skill->skill_title}} - {{$skill->proficiency_score}}% proficiency</h5>
                                    </div>

                                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 ">
                                        <div class="bg-blue-600 h-2.5 rounded-full" style="{{$percentage}}"></div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    @if(Auth::user()->id == $skill->profile->user->id)
                                    <form method="POST" action="{{route('skill.destroy',$skill->id)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="text-gray-100 text-xs mt-5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  rounded-full  px-2 py-1 mr-2  ">
                                            <i class="fa-sharp fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                        </div>
                        <hr>

                        @endif

                        @if($skill->proficiency_score < 65 ) 
                        <div class="grid grid-cols-12 gap-4 p-3">
                            <div class="col-span-11">
                                <div class="mb-1 text-base font-medium text-red-700 ">
                                    <?php $percentage = "width:" . $skill->proficiency_score . "%" ?>
                                    <h5> <i class="fa-solid fa-star"></i> {{$skill->skill_title}} - {{$skill->proficiency_score}}% proficiency</h5>
                                </div>

                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 ">
                                    <div class="bg-red-600 h-2.5 rounded-full" style="{{$percentage}}"></div>
                                </div>
                            </div>
                            <div class="text-right">
                                @if(Auth::user()->id == $skill->profile->user->id)
                                <form method="POST" action="{{route('skill.destroy',$skill->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="text-gray-100 text-xs mt-5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg  rounded-full  px-2 py-1 mr-2  ">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </div>
                    </div>
                    <hr>

                    @endif

                    @endforeach
                    @else
                    <p>No skills information to show</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Profile modal -->
    <div class="py-12 bg-gray-700 hidden transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0" id="profile_modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 font-lg text-2xl font-bold tracking-normal leading-tight mb-4">Add Profile Information</h1>
                <form method="post" action="{{route('profile.update', $profile->id)}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="profile_image" class="mb-2 inline-block text-neutral-700">Profile Image</label>
                        <input name="profile_image" id="profile_image" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none" type="file" />
                    </div>

                    <div>
                        <x-input-label for="profession" value="Profession" />
                        <x-text-input id="profession" name="profession" type="text" value="{{$profile->profession}}" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="intro" value="Intro" />
                        <textarea id="intro" name="intro" rows="4" value="{{$profile->intro}}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{$profile->intro}}</textarea>
                    </div>


                    <div class="flex items-center justify-start w-full">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="profileModal()" aria-label="close modal" role="button">
                    <i class="fa-solid fa-circle-xmark text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- model toggling script -->
    <script>
        let profile_modal = document.getElementById("profile_modal");

        function profileModal(val) {
            $('#profile_modal').removeClass('hidden');
            if (val) {
                fadeIn(profile_modal);
            } else {
                fadeOut(profile_modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>
    <!-- Profile modal ends -->

    <!-- Education Modal -->

    <div class="py-12 bg-gray-700 hidden transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0" id="education_modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 font-lg text-2xl font-bold tracking-normal leading-tight mb-4">Add new Education</h1>
                <form method="post" action="{{route('education.store')}}" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <x-input-label for="degree_title" value="Degree Title" />
                        <x-text-input id="degree_title" name="degree_title" type="text" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="institution" value="Institution" />
                        <x-text-input id="institution" name="institution" type="text" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="duration" value="Degree duration (in years)" />
                        <x-text-input id="duration" name="duration" type="number" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" value="1" name="complete" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ml-3 text-sm font-medium text-gray-900 ">Complete</span>
                        </label>
                    </div>

                    <div>
                        <x-input-label for="score" value="Degree score (Percentage)" />
                        <x-text-input id="score" name="score" step="0.01" type="number" class="mt-1 block w-full" />
                    </div>

                    <input type="hidden" name="profile_id" value="{{$profile->id}}">

                    <div class="flex items-center justify-start w-full">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="educationModal()" aria-label="close modal" role="button">
                    <i class="fa-solid fa-circle-xmark text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- model toggling script -->
    <script>
        let education_modal = document.getElementById("education_modal");

        function educationModal(val) {
            $('#education_modal').removeClass('hidden');
            if (val) {
                fadeIn(education_modal);
            } else {
                fadeOut(education_modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>

    <!-- Education Modal ends -->

    <!-- Experience Modal -->
    <div class="py-12 bg-gray-700 hidden transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0" id="experience_modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 font-lg text-2xl font-bold tracking-normal leading-tight mb-4">Add a new Experience</h1>
                <form method="post" action="{{route('experience.store')}}" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <x-input-label for="job_title" value="Job Title" />
                        <x-text-input id="job_title" name="job_title" type="text" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="company_name" value="Company Name" />
                        <x-text-input id="company_name" name="company_name" type="text" class="mt-1 block w-full" />
                    </div>

                    <input type="hidden" name="profile_id" value="{{$profile->id}}">

                    <div>
                        <x-input-label for="duration" value="Job duration (in years)" />
                        <x-text-input id="duration" name="duration" type="number" step="0.01" class="mt-1 block w-full" />
                    </div>

                    <div class="flex items-center justify-start w-full">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>

                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="experienceModal()" aria-label="close modal" role="button">
                    <i class="fa-solid fa-circle-xmark text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- model toggling script -->
    <script>
        let experience_modal = document.getElementById("experience_modal");

        function experienceModal(val) {
            $('#experience_modal').removeClass('hidden');
            if (val) {
                fadeIn(experience_modal);
            } else {
                fadeOut(experience_modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>

    <!-- Experience Modal ends -->

    <!-- Skill Modal -->

    <div class="py-12 bg-gray-700 hidden transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0" id="skill_modal">
        <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <h1 class="text-gray-800 font-lg text-2xl font-bold tracking-normal leading-tight mb-4">Add a new Skill</h1>
                <form method="post" action="{{route('skill.store')}}" class="mt-6 space-y-6">
                    @csrf
                    <div>
                        <x-input-label for="skill_title" value="Skill Title" />
                        <x-text-input id="skill_title" name="skill_title" type="text" class="mt-1 block w-full" />
                        <x-input-error class="mt-2" :messages="$errors->get('skill_title')" />
                    </div>

                    <div>
                        <x-input-label for="proficiency_score" value="Proficiency Score (in percentage)" />
                        <x-text-input id="proficiency_score" name="proficiency_score" type="number" class="mt-1 block w-full" />
                        <x-input-error class="mt-2" :messages="$errors->get('proficiency_score')" />
                    </div>

                    <input type="hidden" name="profile_id" value="{{$profile->id}}">


                    <div class="flex items-center justify-start w-full">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="skillModal()" aria-label="close modal" role="button">
                    <i class="fa-solid fa-circle-xmark text-2xl"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- model toggling script -->
    <script>
        let skill_modal = document.getElementById("skill_modal");

        function skillModal(val) {
            $('#skill_modal').removeClass('hidden');
            if (val) {
                fadeIn(skill_modal);
            } else {
                fadeOut(skill_modal);
            }
        }

        function fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        }

        function fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        }
    </script>


    <!-- Skill Modal ends -->


</x-app-layout>