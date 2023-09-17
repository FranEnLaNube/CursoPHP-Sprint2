@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Add an Alternative</h2>
    <form action="/alternatives/store" method="POST" class="mt-auto mx-auto max-w-md space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-gray-700">Name</label>
            <input id="name" name="name" type="text"
                class="border rounded px-3 py-2 w-full
                @error('name') border-red-500 @enderror"
                value="{{ old('name') }}" tabindex="1">
            @error('name')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>

        <div>
            <label for="candidates" class="block text-gray-700">President and Vice candidates</label>
            <input id="candidates" name="candidates" type="text"
                class="border rounded px-3 py-2 w-full
                @error('candidates') border-red-500 @enderror"
                value="{{ old('candidates') }}" tabindex="2">
        </div>

        <div>
            <label for="logo" class="block text-gray-700">URL-Logo</label>
            <input id="logo" name="logo" type="text"
                class="border rounded px-3 py-2 w-full
                @error('candidates') border-red-500 @enderror"
                value="{{ old('logo') }}" tabindex="3">
        </div>
        <div class="flex justify-between">
            <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="5">Cancel</a>
            <button type="submit"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="6">Submit</button>
        </div>
    </form>
@endsection
