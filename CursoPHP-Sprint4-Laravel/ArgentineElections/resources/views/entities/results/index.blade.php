@extends('layouts.main-layout')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-{{ $columns }} gap-4 mx-auto">
        @foreach ($electionYears as $electionYear)
        <a href="{{ route('results.showByYear', $electionYear) }}"
        class="my-20 mx-auto border-2 border-blue-400 rounded p-4 text-center hover:bg-blue-500 hover:text-white transition duration-300 ease-in-out">
            <div class="">
                <div class="text-2xl font-bold mb-2">{{ $electionYear }}</div>
                <p>{{$message}}</p>
            </div>
        </a>
        @endforeach
    </div>
@endsection
