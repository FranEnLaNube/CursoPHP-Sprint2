@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Alternative</h2>
    <div class="mt-auto mx-auto max-w-md space-y-4">
        <table>
            <div>
                <label for="name" class="block text-gray-700">Name</label>
                <div id="name" name="name" type="text" class="border rounded px-3 py-2 w-full">
                    {{ $alternative->name }}
                </div>
                {{-- TODO: Abstract this concept in default alternatives to avoid this if --}}
                @if (!($alternative->isblank() || $alternative->isSpoiled()))
                <div>
                    <label for="candidates" class="block text-gray-700">President and Vice candidates</label>
                    <div id="name" name="name" type="text" class="border rounded px-3 py-2 w-full">
                        {{ $alternative->presi_vice }}
                    </div>
                </div>
                @endif
                @if (!empty($alternative->logo))
                    <div>
                        <label for="candidates" class="block text-gray-700">President and Vice candidates</label>
                        <div id="name" name="name" type="text" class="border rounded px-3 py-2 w-full">
                            {{ $alternative->logo }}
                        </div>
                    </div>
                @endif
            </div>
        </table>
        <div class="text-center mt-4">
            <a href="/"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
        </div>
    @endsection
