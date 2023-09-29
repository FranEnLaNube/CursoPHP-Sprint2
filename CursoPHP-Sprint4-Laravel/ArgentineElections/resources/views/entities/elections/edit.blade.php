@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Edit an Election</h2>
    <form action="/elections/{{ $year }}" method="POST" class="mt-auto mx-auto max-w-md space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="date" class="block text-gray-700">Date of election</label>
            <input id="date" name="date" type="date"
                class="border rounded px-3 py-2 w-full
                @error('date') border-red-500 @enderror"
                value="{{ old('date', $election->date) }}" tabindex="1">
            @error('date')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
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
