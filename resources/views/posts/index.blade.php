<x-app-layout>
    
    <x-slot name="header">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <p><a href="{{ url()->previous() }}" class="btn btn-outline-dark">Cofnij</a></p>
        <p class="h4 font-weight-bold">Temat:   {{$post->name}}   </p>
        <br>
        <p class="h5">{{$post->description}} </p>
        <br>
        <p class="h6 text-secondary font-italic font-weight-light">autor: {{$post->author}} </p>
        <p class="h6 text-secondary font-italic font-weight-light">{{$post->created_at}}</p>
</div>
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
                    
                        <p class="h6 text-secondary font-italic font-weight-light">autor: {{$comment->author}}, {{$comment->created_at}}</p>
                        <p>{{$comment->description}}</p>

                        <br>


                        @hasrole('admin')
                        <p class="bg-secondary">
                        <h5>-----</h5>
                            
                                <a class="button btn btn-danger btn-sm delete" data-id="{{$comment->id}}" href="/comments-delete/{{$comment->id}}">x</a>
                 
                        @endrole
                        </p>

                    </div>
                </div>

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
                    <input type="hidden" id="author" name="author" value="{{ Auth::user()->name }}"><br>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </div>
            </form>
        </div>
</x-app-layout>
