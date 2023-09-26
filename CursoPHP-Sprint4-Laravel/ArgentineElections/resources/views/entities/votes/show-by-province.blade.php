@extends('layouts.main-layout')

@section('content')
    <h2 class="text-3xl font-semibold text-center mt-6 mb-4">{{ $year }} Election Results</h2>
    <h3 class="text-2xl font-semibold text-center mb-4">{{ $province->name }} </h3>
    <div class="border rounded pt-6 px-auto p-10 mt-auto mx-auto my-4 max-w-xl space-y-4">

        <table class="table-auto mx-auto ">
            <thead class="break-words px-3 py-3 bg-gray-200 text-left text-sm leading-4 font-bold text-gray-600 uppercase">
                <tr>
                    <th class="text-left px-4 py-2">Candidate</th>
                    <th class="px-4 py-2">Votes</th>
                    <th class="px-4 py-2">Percentage</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($votes as $altName => $altVotes)
                    <tr>
                        <td class="px-4 py-2">{{ $altName }}</td>
                        <td class="px-4 py-2">{{ $altVotes }}</td>
                        <td class="text-center px-4 py-2">{{ $percents[$altName] }}%</td>
                        <td class="text-center text-blue-600 underline px-4 py-2"><a
                                href="{{ route('votes.edit', [$year, $province->id, $altIds[$altName]]) }}"
                                tabindex="7">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4 text-center">
        <a href="/" class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">Back</a>
    </div>
@endsection
