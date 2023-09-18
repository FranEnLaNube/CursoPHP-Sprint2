@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-6">Elections</h2>
    <div class="mx-auto px-20 py-5">
        <table class="min-w-full border-collapse border mt-4">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-big text-gray-600 uppercase tracking-wider">
                        Election date</th>
                    <th class="px-6 py-3 bg-gray-200"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($elections as $election)
                    <tr>
                        <td class="border px-6 py-4">{{ $election->date }}</td>
                        <td class="border px-6 py-4 text-right">
                            <a href="{{ route('elections.edit', $years[$loop->index]) }}"
                                class="text-white bg-blue-400 hover:bg-blue-700 font-bold py-2 px-4 m-4 rounded mr-3">Edit</a>
                            <form action="{{ route('elections.destroy', $years[$loop->index]) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-white bg-red-600 hover:bg-red-900 font-bold py-2 px-4 m-4 rounded mr-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded inline-block">Back</a>
    </div>
@endsection
