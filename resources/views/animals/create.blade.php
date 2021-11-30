@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
        <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Add new animal
            </header>
            
           <div class="flex justify-center pt-20">
            <form action="/animals" method="POST">
            @csrf
                    <div class="block">
                        <input type="text" name="name" class="block shadow-5xl mb-10 p-2 w-80 italic
            placeholder-gray-400" placeholder="Name....">
                        <input type="text" name="type" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Type....">
                        <input type="text" name="age" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" placeholder="Age....">
                        <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="description" placeholder="Description....">
                        <button type="submit" class="bg-blue-500 block shadow-5xl mb-10 p-2 
                             w-80 uppercase font-bold">Save</button>
                    </div>           
            </form>
           </div>
        </section>
    </div>
</main>
@endsection