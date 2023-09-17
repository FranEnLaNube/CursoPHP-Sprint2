@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center mt-10">Alternatives</h2>
    <div class="mt-4 mx-auto p-20">
        <table class="min-w-full border-collapse border">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-600 uppercase tracking-wider">
                        Name</th>
                    <th class="px-6 py-3 bg-gray-200"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternatives as $alternative)
                    <tr>
                        <td class="border px-6 py-4">{{ $alternative->name }}</td>
                        <td class="border px-6 py-4 text-right">
                                @if (!($alternative->isblank() || $alternative->isSpoiled()))
                                <a href="{{ route('alternatives.edit', $alternative->id) }}"
                                    class="text-white bg-blue-400 hover:bg-blue-700 font-bold py-2 px-4 m-4 rounded mr-3">Edit</a>
                                <form action="{{ route('alternatives.destroy', $alternative->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 hover:bg-red-900 font-bold py-2 px-4 m-4 rounded mr-3">Delete</button>
                                </form>
                                @endif
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
    </div>
@endsection
