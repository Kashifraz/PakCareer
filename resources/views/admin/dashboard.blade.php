<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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

            <!-- component -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3 mt-6">
                <div class="min-w-0 rounded-lg shadow overflow-hidden bg-white ">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-orange-500  bg-orange-100 mr-4">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                Total students
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{$total_students}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow overflow-hidden bg-white ">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-green-500 bg-green-100  mr-4">
                            <i class="fa-solid fa-person-chalkboard"></i>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600 ">
                                Total Counselors
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                {{$total_counselors}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="min-w-0 rounded-lg shadow overflow-hidden bg-white">
                    <div class="p-4 flex items-center">
                        <div class="p-3 rounded-full text-teal-500 bg-green-100 mr-4">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Discusssions
                            </p>
                            <p class="text-lg font-semibold text-gray-700 ">
                                {{$total_questions}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-white shadow rounded-lg mb-5">
                <canvas id="canvas" style="width:100%;"></canvas>
            </div>
            <script>
                var year = <?php echo $month; ?>;
                var user = <?php echo $user; ?>;
                var student = <?php echo $student; ?>;
                var counselor = <?php echo $counselor; ?>;
                var barChartData = {
                    labels: year,
                    datasets: [{
                        label: 'User',
                        backgroundColor: "Blue",
                        data: user
                    },
                    {
                        label: 'student',
                        backgroundColor: "Orange",
                        data: student
                    },
                    {
                        label: 'counselor',
                        backgroundColor: "green",
                        data: counselor
                    }
                ]
                };

                window.onload = function() {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: barChartData,
                        options: {
                            
                            responsive: true,
                            title: {
                                display: true,
                                text: 'Yearly User Joined'
                            }
                        }
                    });
                };
            </script>
        </div>
    </div>

</x-app-layout>