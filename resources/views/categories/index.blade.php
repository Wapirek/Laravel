<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Kategorie') }} -->
            FORUM MIŁOŚNIKÓW MOTORYZACJI
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="table table-striped text-black">
            <thead>
            <tr>
                <th scope="col">Kategoria</th>
                <th scope="col">Data utworzenia</th>
            </tr>
            </thead>
        <tbody>
        
        @foreach($categories as $category)
        
            <tr>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <!--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4 bg-white border-b border-gray-200"> -->
                        <td>
                          <a class= "font-weight-bold text-decoration-none" href="{{ route('categories.show',$category->id) }}">
                             <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
                                  {{$category->name}}
                             <!-- </div> -->
                          </a>
                        </td>

                    <!-- </div> -->
                    <!-- {{$category->created_at}}{{$category->updated_at}} -->
                <!-- </div> -->

        </div>
                 <td>
                    {{$category->updated_at}}
                 </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>


</x-app-layout>
