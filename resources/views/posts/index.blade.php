<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$post->name}}   opis: {{$post->description}}  autor: {{$post->author}}
        </h2>
    </x-slot>
<!---
                        nazwa: {{$post->name}} <br>
                        opis: {{$post->description}} <br>
                        autor: {{$post->author}} <br>
                        data utworzenia: {{$post->created_at}}
           --->
    <div class="py-12">
        @foreach($comments as $comment)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        Komentarz: {{$comment->description}} <br>
                        autor: {{$comment->author}} <br>
                       
                    </div>
                </div>
                @hasrole('admin')
                <button class="btn btn-danger btn-sm delete" data-id="{{$comment->id}}">x</button>
                @endrole
            </div>

        @endforeach

       
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form method="POST" action="{{ route('comments.store') }}">
            @csrf
                <div class="p-6 bg-white border-b border-gray-200">
                    <label for="description">Dodaj Komentarz!</label><br>
                    <textarea class="form-control" name="description" id="description" row=3></textarea>
                    <input type="hidden" id="postId" name="postId" value="{{$post->id}}">
                    <input type="hidden" id="author" name="author" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
</x-app-layout>
