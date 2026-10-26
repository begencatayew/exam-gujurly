@extends('layouts.app')

@section('title')
    Sportsmens
@endsection

@section('content')
    <div class="text-lg text-slime-500 ">
        Right now, You can see all of the avaliable biographies in <b>HOME</b> page
    </div>

    <div class="text-2xl text-slime-700 underline">
        If you have any requmendetions feel free to <br>contact us!
    </div>

    <div class="2xl text-slime-900 text-center">
        At the right below you can see<br>
        NOT AVALIABLE biographies
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

        @foreach ($sportsmen as $sportsman)
            <div class="border rounded-lg shadow p-4">

                <h2 class="text-xl font-bold">
                    {{ $sportsman->name }} {{ $sportsman->surname }}
                </h2>

                <p class="text-gray-600">
                    Age: {{ $sportsman->age }}
                </p>

                <p class="mt-3">
                    {{ $sportsman->bio }}
                </p>

            </div>
        @endforeach

    </div>
@endsection
