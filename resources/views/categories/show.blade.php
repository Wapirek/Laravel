<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{$category->name}}
        </h2>
    </x-slot>

    <div class="py-12">


        @foreach($posts as $post)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('post.show',$post->id) }}">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{$post->name}}
                    </div>
                </div>
                </a>
            </div>
        @endforeach

    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form method="POST" action="{{route('post.store')}}">
            @csrf
                <div class="p-6 bg-white border-b border-gray-200">
                    <label for="description">Dodaj nowy temat</label><br>
                    <textarea class="form-control" name="name" id="name" row=3></textarea>
                    <textarea class="form-control" name="description" id="description" row=3></textarea>
                    <input type="hidden" id="categoryID" name="categoryID" value="{{$category->id}}">
                    <input type="hidden" id="author" name="author" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
            
                </div>
            </form>
        </div>
</x-app-layout>
