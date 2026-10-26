@extends('layouts.app')

@section('title')
    Sportsmens
@endsection

@section('content')
    <div class="text-lg text-white">
        Right now, You can see all of the avaliable biographies in <b>HOME</b> page
    </div>

    <div class="text-2xl text-slime-700 underline text-lime-400">
        If you have any requmendetions feel free to <br>contact us!
    </div>

    <div class="2xl text-white text-center">
        At the right below you can see<br>
        NOT AVALIABLE biographies;
    </div>

    <div class="grid grid-cols-2 gap-6 mt-10">
        @foreach ($sportsmen as $sportsman)
            <div class="rounded-lg shadow p-3 text-2xl bg-slate-700 shadow-xl py-10">

                <div class="text-base font-bold">
                    {{ $sportsman->name }} {{ $sportsman->surname }}
                </div>

                <div class="text-gray-600">
                    Age: {{ $sportsman->age }}
                </div>

                <div class="mt-3 text-black">
                   Biography: {{ $sportsman->bio }}
                </div>

            </div>
        @endforeach

    </div>
@endsection
