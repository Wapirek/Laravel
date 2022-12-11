<x-app-layout>
    
    <x-slot name="header">
        <p><a href="{{ url()->previous() }}" class="btn btn-outline-dark">Cofnij</a></p>
        <h2 class="font-semibold text-xl text-blue leading-tight ">
          {{$category->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table class="table table-striped text-black">
            <thead>
            <tr>
                <th scope="col">Tematy</th>
                <th scope="col">Ostatnia aktualizacja</th>
            </tr>
            </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
          <td>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <a class="font-weight-bold text-decoration-none" href="{{ route('post.show',$post->id) }}">
                        {{$post->name}}

                    </a>
                </div>
            </td>
            <td>
                {{$post->updated_at}}
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="form-row" method="POST" action="{{route('post.store')}}">
            @csrf
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 col-md-6 mb-3">
                    <label for="description">Dodaj nowy temat</label><br>
                    <p><textarea placeholder="nazwa" class="form-control form-control-sm" name="name" id="name" row=3></textarea></p>

                    <p><textarea placeholder="opis"class="form-control form-control-sm" name="description" id="description" row=3></textarea></p>
                    <input class="form-control" type="hidden" id="categoryID" name="categoryID" value="{{$category->id}}">
                    <input class="form-control" type="hidden" id="author" name="author" value="{{ Auth::user()->name }}">
                    <button type="submit" class="btn btn-primary">Wyślij</button>
            
                </div>
            </form>
        </div>
</x-app-layout>
