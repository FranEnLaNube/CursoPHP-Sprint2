@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center m-5">Alternatives</h2>
    @if (session('error'))
        <div class="flex max-w-3xl mx-auto mb-3 bg-yellow-400 text-black text-center p-4 rounded-lg shadow-md justify-around">
            <form action="{{ route('alternatives.destroy', session('id')) }}" method="POST">
                @csrf
                @method('DELETE')
                <p>{{ session('error') }}</p>
                <input type="checkbox" name="confirm-delete" id="confirm-delete">
                <label for="confirm-delete">Yes, I'm sure</label>
                <button type="submit"
                    class="text-white bg-red-600 hover:bg-red-900 font-bold m-4 py-2 px-4 rounded">Delete</button>
                    <a href="/alternatives"
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
    <table class="max-w-3xl border-collapse border mx-auto p-10">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 bg-gray-200 text-left text-base leading-4 font-medium text-gray-700 uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-3 bg-gray-200"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alternatives as $alternative)
                <tr class="border border-collapse">
                    @if (!($alternative->isblank() || $alternative->isSpoiled()))
                        <td class="border px-6 py-5">{{ $alternative->name }}</td>
                        <td class="m-2 my-4 flex justify-around h-full">
                            <a href="{{ route('alternatives.show', $alternative->id) }}"
                                class="text-white bg-blue-400 hover-bg-blue-700 font-bold mx-2 py-2 px-4 rounded h-full">View</a>
                            <a href="{{ route('alternatives.edit', $alternative->id) }}"
                                class="text-white bg-blue-600 hover-bg-blue-900 font-bold mx-2 py-2 px-4 rounded h-full">Edit</a>
                            <form action="{{ route('alternatives.destroy', $alternative->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-600 hover-bg-red-900 font-bold mx-2 py-2 px-4 rounded h-full"
                                    onclick="return confirm('Are you sure you want to delete this alternative?')">Delete</button>
                            </form>
                        </td>
                    @endif
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
            <a href="{{ route('alternatives.create') }}"
                class="bg-blue-400 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Create</a>
        </div>
    </div>
@endsection
