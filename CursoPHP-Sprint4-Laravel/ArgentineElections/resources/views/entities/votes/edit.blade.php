@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Edit these Votes</h2>
    <form id="main-form" class="mt-auto mx-auto max-w-md space-y-4"
        action="{{ route('votes.update', ['election','province','alternative','quantity']) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="election" class="block text-gray-700 my-2">Election Date</label>
            <select id="election" name="election" class="border rounded px-3 py-2 w-full" tabindex="1" form="main-form">
                <option value="">Select Election Date</option>
                @foreach ($elections as $election)
                    <option value="{{ $election->id }}" @if ($election->id == $vote->election->id) selected @endif>
                        {{ $vote->election->date }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="province" class="block text-gray-700 my-2">Province</label>
            <select id="province" name="province" class="border rounded px-3 py-2 w-full" tabindex="2" form="main-form">
                <option value="">Select Province</option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}" @if ($province->id == $vote->province->id) selected @endif>
                        {{ $province->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="alternative" class="block text-gray-700 my-2">Alternative</label>
            <select id="alternative" name="alternative" class="border rounded px-3 py-2 w-full" tabindex="3"
                form="main-form">
                <option value="">Select Alternative</option>
                @foreach ($alternatives as $alternative)
                    <option value="{{ $alternative->id }}" @if ($alternative->id == $vote->alternative->id) selected @endif>
                        {{ $alternative->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantity" class="block text-gray-700 my-2">Quantity</label>
            <input id="quantity" name="quantity" type="number" class="border rounded px-3 py-2 w-full"
                value="{{ old('quantity', $vote->quantity) }}" min="0" tabindex="4" form="main-form">
        </div>
        <div class="flex justify-between">
            <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="5">Cancel</a>
                <button type="submit"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block" tabindex="7"
                form="main-form">Submit</button>
            </div>
        </form>
        <form id="sub-form" class="mx-auto"
        action="{{ route('votes.destroy-votes', [$vote->election_id, $vote->province_id, $vote->alternative_id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" form="sub-form"
                class="flex justify-between bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 m-4 rounded mx-auto"
                tabindex="3">Delete</button>
        </form>
@endsection
