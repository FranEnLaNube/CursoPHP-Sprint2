<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Election;
use App\Models\Vote;
use Illuminate\Http\Request;


class ElectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elections = Election::orderby('date', 'desc')->get();
        $years = [];

        foreach ($elections as $election) {
            $year = strtotime($election->date);
            $years[] = date("Y", $year);
        }

        return view('entities.elections.index')->with([
            'elections' => $elections,
            'years' => $years,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entities.elections.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $election = new Election();
        $election->date = $request->get('date');

        $election->save();

        return redirect('/elections');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $year)
    {
        $election = Election::whereYear('date', $year)->first();
        return view('entities.elections.show')->with(['election' => $election, 'year' => $year]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $year)
    {
        $election = Election::whereYear('date', $year)->first();
        return view('entities.elections.edit')->with(['election' => $election, 'year' => $year]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $year)
    {
        $election = Election::whereYear('date', $year)->first();
        $election->date = $request->get('date');
        $election->save();
        return redirect('/elections');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $year)
    {
        $election = Election::whereYear('date', $year)->first();
        if (!$election) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        if (!empty(Vote::where(['election_id' => $election->id])->first()->quantity)) {
            if (!$request->has('confirm-delete')) {
                // If the alternative has associated votes it shows an error message
                return redirect()->back()->with('error', 'This Election has votes associated. Are you sure you want to delete it? Confirm it by checking the box')
                    ->with('year', $year);
            }
        }
        //First delete the associated vote
        // FIXME should be a better way to find by just one parameter
        Vote::where(['election_id' => $election->id])->delete();
        // Delete the election
        $election->delete();
        return redirect('/elections');
    }
}
