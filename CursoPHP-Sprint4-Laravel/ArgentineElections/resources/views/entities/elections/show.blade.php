@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">{{ $year }}'s election date</h2>
    <div class="mt-auto mx-auto max-w-md space-y-4">
        <table>
            <div class="py-3 my-3">
                {{-- <label for="date" class="block text-gray-700 py-3">Election's date</label> --}}
                <div id="date" date="date" type="text" class="border rounded px-3 py-2 w-full text-center">
                    {{ $election->date }}
                </div>
            </div>
        </table>
        <div class="text-center ">
            <a href="/elections"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
        </div>
    @endsection
