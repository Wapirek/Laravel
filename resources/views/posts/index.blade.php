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

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        nazwa: {{$post->name}} <br>
                        opis: {{$post->description}} <br>
                        autor: {{$post->author}} <br>
                        data utworzenia: {{$post->created_at}}
                    </div>
                </div>
            </div>

           

       
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <form>
            <div class="p-6 bg-white border-b border-gray-200"">
                <label for="comments">Dodaj Komentarz!</label><br>
                <textarea class="form-control" id="comments" row=3></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
