@extends('layouts.app')

@section('title')
    Sportsmens
@endsection

@section('content')

    <div class="text-base py-12">Witness the rise of legends and the relentless journeys behind their greatest triumphs.
        Discover the inspiring stories and untold biographies of the world's most iconic athletes. Ready to follow in the
        footsteps of champions? <br> Avaliable Biographies: <span>{{ $sportsmens->count() }}</span> </div>


    <div class="grid grid-cols-2 gap-4 text-base">
        @foreach ($sportsmens as $sportmen)
            <div class="shadow-xl p-6 m-6 rounded-2xl bg-lime-800 hover:bg-slate-700 inset-shadow-sm inset-shadow-grey-500">

                <div class="">
                 <img
                    src="{{ asset($sportmen->image) }}"
                    alt="{{ $sportmen->name }} {{ $sportmen->surname }}"
                    class="h-72 w-full object-cover"
                >
                </div>

                <div>
                    <b>Id:</b> {{ $sportmen->id }}
                </div>

                <div>
                    <b>Name:</b> {{ $sportmen->name }}
                </div>

                <div>
                    <b>Surname:</b> {{ $sportmen->surname }}
                </div>

                <div>
                    <b>Age</b> {{ $sportmen->age }}
                </div>

                <div>
                    <b>Biography</b> {{ $sportmen->bio }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
