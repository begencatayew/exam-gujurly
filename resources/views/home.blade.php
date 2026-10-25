@extends('layouts.app')

@section('title')
    Sportsmens
@endsection

@section('content')

    <div class="text-1xl py-12">Witness the rise of legends and the relentless journeys behind their greatest triumphs.
        Discover the inspiring stories and untold biographies of the world's most iconic athletes. Ready to follow in the
        footsteps of champions? <span>{{ $sportsmens->count() }}</span> </div>


    <div class="grid grid-cols-3 gap-4 text-1xl">
        @foreach ($sportmens as $sportmen)
            <div class="shadow-xl p-6 m-6 rounded-2xl bg-lime-800 hover:bg-slate-700 inset-shadow-sm inset-shadow-grey-500">
                <div>
                    <b>Id:</b> {{ $sportsmen->id }}
                </div>

                <div>
                    <b>Name:</b> {{ $sportsmen->name }}
                </div>

                <div>
                    <b>Surname:</b> {{ $sportsmen->surname }}
                </div>

                <div>
                    <b>Age</b> {{ $sportsmen->table_no }}
                </div>

                <div>
                    <b>Biography</b> {{ $sportsmen->order }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
