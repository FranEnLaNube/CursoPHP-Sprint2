@extends('layouts.main-layout')

@section('content')
    <h2 class="text-3xl font-semibold text-center mt-6 mb-4">Add Votes</h2>
    <div class="mt-auto mx-auto max-w-md space-y-4">
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded-lg shadow-md">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('votes.store') }}" method="POST">
            @csrf
            <div class="border rounded p-10">
                <div>
                    <label for="election" class="block text-gray-700 my-2">Election Date</label>
                    <select id="election" name="election" class="border rounded px-3 py-2 w-full" tabindex="1">
                        <option value="">Select Election Date</option>
                        @foreach ($elections as $election)
                            <option value="{{ $election->id }}" {{ old('election') == $election->id ? 'selected' : '' }}>
                                {{ $election->date }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="province" class="block text-gray-700 my-2">Province</label>
                    <select id="province" name="province" class="border rounded px-3 py-2 w-full" tabindex="2">
                        <option value="">Select Province</option>
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}" {{ old('province') == $province->id ? 'selected' : '' }}>
                                {{ $province->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="alternative" class="block text-gray-700 my-2">Alternative</label>
                    <select id="alternative" name="alternative" class="border rounded px-3 py-2 w-full" tabindex="3">
                        <option value="">Select Alternative</option>
                        @foreach ($alternatives as $alternative)
                            <option
                                value="{{ $alternative->id }}"{{ old('alternative') == $alternative->id ? 'selected' : '' }}>
                                {{ $alternative->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="quantity" class="block text-gray-700 my-2">Quantity</label>
                    <input id="quantity" name="quantity" type="number" class="border rounded px-3 py-2 w-full"
                        value="{{ session('error') ? session('existingVotes') : old('quantity') }}" tabindex="4"
                        min="0">
                </div>
            </div>
            <div class="flex justify-between">
                <a href="/"
                    class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                    tabindex="5">Cancel</a>
                @if (session('error'))
                    <a href="{{ session('editLink') }}"
                        class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                        tabindex="7">Edit</a>
                @endif
                <button type="submit"
                    class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                    tabindex="6">Submit</button>
            </div>
        </form>
        <div></div>
    @endsection
