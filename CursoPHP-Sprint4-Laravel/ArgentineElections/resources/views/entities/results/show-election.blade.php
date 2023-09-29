@extends('layouts.main-layout')

@section('content')
    <h2 class="text-3xl font-semibold text-center my-5">Results of {{ $year }} election</h2>
    <div class="mt-auto mx-auto space-y-4">
        <table class="mx-auto border-collapse border my-4 table-auto">
            <thead>
                <tr>
                    <th class=" px-3 py-3 bg-gray-200 hover:bg-gray-400 text-left text-xs leading-4 font-bold text-gray-600 uppercase">
                        <a class="block "
                                href="/alternatives">
                                Alternative
                            </a>
                    </th>
                    @foreach ($results[array_rand($results)] as $alternative_name => $alternative)
                        <th class="break-words px-3 py-3 bg-gray-200 text-left text-xs leading-4 font-bold text-gray-600 uppercase">
                            {{ $alternative_name }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $provinceName => $provinceResults)
                    <tr>
                        <td class="border hover:bg-blue-400 text-lg font-bold text-blue-600 underline px-3 py-4">
                            <a class="block "
                                href="/results/{{ $year }}/{{ $provincesId[$provinceName] }}">
                                {{ $provinceName }}
                            </a>
                        </td>
                        @foreach ($provinceResults as $quantity)
                            <td class="border px-3 py-4">
                                {{ $quantity }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
