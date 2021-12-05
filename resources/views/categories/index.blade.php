<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategorie') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @foreach($categories as $category)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('categories.show',$category->id) }}">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{$category->name}}
                    </div>
                </div>
            </a>
            </div>
        @endforeach
       
    </div>

    
</x-app-layout>
