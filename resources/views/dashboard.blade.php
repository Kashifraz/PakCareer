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
    </div>
</x-app-layout>