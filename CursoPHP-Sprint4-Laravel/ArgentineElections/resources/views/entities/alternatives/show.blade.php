@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center m-8">Alternative</h2>
    <div class="border rounded p-5 my-10 mx-auto max-w-md space-y-4">
        <table class="border rounded px-3 py-2">
                <label for="name" class="block text-gray-700">Name</label>
                <div id="name" name="name" type="text" class="border rounded px-3 py-2 w-full">
                    {{ $alternative->name }}
                </div>
                {{-- TODO: Abstract this concept in default alternatives to avoid this if --}}
                @if (!($alternative->isblank() || $alternative->isSpoiled() || empty($alternative->presi_vice)))
                        <label for="presi_vice" class="block text-gray-700">President and Vice candidates</label>
                        <div class="border rounded px-3 py-2 w-full">
                            {{ $alternative->presi_vice }}
                        </div>
                @endif
                @if (!empty($alternative->logo))
                    <div class="border rounded px-3 py-2">
                        <label for="logo" class="block text-gray-700">URL-Logo</label>
                        <div id="logo" name="logo" type="text" class="px-3 py-2 w-full">
                            {{ $alternative->logo }}
                        </div>
                    </div>
                @endif
        </table>
        <div class="text-center flex justify-around mt-4 space-x-2">
            <a href="/alternatives"
                class="bg-blue-400 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
            @if (!($alternative->isblank() || $alternative->isSpoiled()))
                <a href="/alternatives/{{ $alternative->id }}/edit"
                    class="bg-blue-400 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Edit</a>
            @endif
        </div>
    </div>
@endsection
