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
                Animals
            </header>
            <div class="pt-10 mx-10">
            <a href="animals/create" class="border-b-2 pb-2 border-dotted text-green-500">add an animal &rarr;</a>
            </div>

            <div class="w-5/7 p-10">
            @foreach ($animals as $animal)
            <div class="m-auto">
                    <div class="float-right">
                        <a href="animals/{{$animal->id}}/edit" class="border-b-2 pb-2 border-dotted text-yellow-400">Edit &rarr;</a>
                            <form action="animals/{{$animal->id}}" method="POST" class="pt-5">
                            @csrf
                            @method('delete')
                                <button type="submit" class="border-b-2 pb-2 border-dotted text-red-500">Delete &rarr;</button>
                            </form>
                    </div>
                    <div class="p-5">
                        <span class="uppercase text-blue-500 text-xs italic">Type: {{$animal->type}}</span>
                        <h2 class="text-gray-700 text-3xl py-5">Name: {{$animal->name}}</h2>
                        <p class="text-lg text-gray-700 py-6">Age: {{$animal->age}}</p>
                        <p class="text-lg text-gray-700 py-6">Description: {{$animal->description}}</p>
                        <hr class="p-2">
                    </div>
                </div>
            @endforeach
            </div>
        </section>
    </div>
</main>
@endsection