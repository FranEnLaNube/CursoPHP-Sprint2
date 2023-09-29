@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center m-5">Elections</h2>
    {{-- Message to alert deleting an election with votes associated --}}
    @if (session('error'))
        <div
            class="flex max-w-3xl mx-auto mb-3 bg-yellow-400 text-black text-center p-4 rounded-lg shadow-md justify-around">
            <form action="{{ route('elections.destroy', session('year')) }}" method="POST">
                @csrf
                @method('DELETE')
                <p>{{ session('error') }}</p>
                <input type="checkbox" name="confirm-delete" id="confirm-delete">
                <label for="confirm-delete">Yes, I'm sure</label>
                <button type="submit"
                    class="text-white bg-red-600 hover:bg-red-900 font-bold m-4 py-2 px-4 rounded">Delete</button>
                <a href="/elections"
                    class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded  inline-block"
                    tabindex="4">Cancel</a>
            </form>
        </div>
    @endif
    @if (session('error-2'))
        <div class="max-w-3xl mx-auto mb-3 bg-red-400 text-white text-center p-4 rounded-lg shadow-md">
            {{ session('error-2') }}
        </div>
    @endif
    {{-- <div class="mx-auto px-20 py-5"> --}}
    <table class="max-w-3xl w-3/4 mx-auto p-10">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-200 text-left leading-4 font-big text-gray-600 uppercase tracking-wider">
                    Election date</th>
                <th class="px-6 py-3 bg-gray-200"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($elections as $election)
                <tr class="border border-collapse">
                    <td class="border px-6 py-5">{{ $election->date }}</td>
                    <td class="m-2 my-4 flex justify-around h-full">
                        <a href="{{ route('elections.show', $years[$loop->index]) }}"
                            class="text-white bg-blue-400 hover:bg-blue-700 font-bold mx-2 py-2 px-4 rounded h-full">View</a>
                        <a href="{{ route('elections.edit', $years[$loop->index]) }}"
                            class="text-white bg-blue-600 hover:bg-blue-900 font-bold mx-2 py-2 px-4 rounded h-full">Edit</a>
                        <form action="{{ route('elections.destroy', $years[$loop->index]) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-900 font-bold mx-2 py-2 px-4 rounded h-full"
                                onclick="return confirm('Are you sure you want to delete this election?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="max-w-3xl mx-auto my-5 flex justify-around">
        <div class="text-center">
            <a href="/"
                class="bg-blue-400 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
        </div>
        <div class="text-center">
            <a href="{{ route('elections.create') }}"
                class="bg-blue-400 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Create</a>
        </div>
    </div>
@endsection
