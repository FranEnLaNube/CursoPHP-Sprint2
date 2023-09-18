@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Add an Alternative</h2>
    <form action="/elections/store" method="POST" class="mt-auto mx-auto max-w-md space-y-4">
        @csrf

        <div>
            <label for="date" class="block text-gray-700">Date of election</label>
            <input id="date" name="date" type="date"
                class="border rounded px-3 py-2 w-full
                @error('date') border-red-500 @enderror"
                value="{{ old('date') }}" tabindex="1">
            @error('name')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-between">
            <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="2">Cancel</a>
            <button type="submit"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="3">Submit</button>
        </div>
    </form>
@endsection
