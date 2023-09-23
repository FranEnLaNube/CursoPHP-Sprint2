@extends('layouts.main-layout')

@section('content')
    <h2 class="text-2xl font-semibold text-center my-10">Vote details</h2>
    <div class="mt-auto mx-auto max-w-md space-y-4">
        <div class="border rounded p-10">
            <table>
                <label for="date" class="block text-gray-700 py-3">Election's date</label>
                <div id="date" class="border rounded px-3 py-2 w-full text-center">
                    {{ $vote->election->date }}
                </div>
                <label for="province" class="block text-gray-700 py-3">Province</label>
                <div id="province" class="border rounded px-3 py-2 w-full text-center">
                    {{ $vote->province->name }}
                </div>
                <label for="alternative" class="block text-gray-700 py-3">Alternative</label>
                <div id="alternative" class="border rounded px-3 py-2 w-full text-center">
                    {{ $vote->alternative->name }}
                </div>
                <label for="quantity" class="block text-gray-700 py-3">Quantity</label>
                <div id="quantity" class="border rounded px-3 py-2 w-full text-center">
                    {{ $vote->quantity }}
                </div>
            </table>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('votes.edit', [$year, $vote->province_id, $vote->alternative_id]) }}"
                class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="1">Edit</a>

            <form class="mx-auto"
                action="{{ route('votes.destroy-votes', [$vote->election_id, $vote->province_id, $vote->alternative_id]) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="flex justify-between bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-4 m-4 rounded mx-auto"
                    tabindex="3">Delete</button>
            </form>
        <a href={{"/results/$year"}} class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 m-4 rounded inline-block"
                tabindex="2">Back</a>
        </div>
    </div>
@endsection
