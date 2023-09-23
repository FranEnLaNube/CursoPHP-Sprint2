<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Election;
use App\Models\Province;
use App\Models\Alternative;
use App\Models\Vote;

class VotesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $elections = Election::orderby('date', 'desc')->get();
        $provinces = Province::orderby('id')->get();
        $alternatives = Alternative::orderby('id')->get();

        return view('entities.votes.create', compact('elections', 'provinces', 'alternatives'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request,)
    {
        $this->validate($request, [
            'election' => 'required|numeric',
            'province' => 'required|numeric',
            'alternative' => 'required|numeric',
            'quantity' => 'required|numeric|min:0',
        ]);

        // Check if there is a vote with those PK
        $existingVote = Vote::where([
            'election_id' => $request->input('election'),
            'province_id' => $request->input('province'),
            'alternative_id' => $request->input('alternative'),
        ])->first();

        if ($existingVote) {
            // Making the url to go to the specific year by the election_id
            // TODO: This is a too much complicated logic only to want use the year in the URL instead of election id.
            $selectedElection = Election::find($request->input('election'));
            $selectedYear = $selectedElection ? date('Y', strtotime($selectedElection->date)) : '';
            $editLink = route('votes.edit', [$selectedYear, $request->input('province'), $request->input('alternative')]);

            // Show error message
            return redirect()->back()->withInput()
                ->with('error', 'These votes are already have this value, change them in EDIT')
                ->with('editLink', $editLink)
                ->with('existingVotes', $existingVote->quantity);
        }
        // Vote::create($request->all()); TODO Is this the correct way to create a new Vote?
        // Old or different method to create a new register
        $vote = new Vote();
        $vote->election_id = $request->get('election');
        $vote->province_id = $request->get('province');
        $vote->alternative_id = $request->get('alternative');
        $vote->quantity = $request->get('quantity');

        $vote->save();
        // Send the $year value to the view from the election date
        $date = $vote->election->date;
        $year = date('Y', strtotime($date));

        // Correct way to use routes:
        return redirect(route('votes.findVotes', [$year, $vote->province_id, $vote->alternative_id]));
        //Old: return redirect('votes/{year}/{province_id}/{alternative_id}');
    }

    /**
     * Display votes for one alternative in one province in one election.
     */

    public function showVote($year, $province_id, $alternative_id)
    {
        // Find the election based on the provided year
        $election = Election::whereYear('date', $year)->first();
        // Check if the election was found
        if (!$election) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        // Find the vote based on the election_id, province_id, and alternative_id using eloquent
        $vote = Vote::where([
            'election_id' => $election->id,
            'province_id' => $province_id,
            'alternative_id' => $alternative_id,
        ])->first();

        // Check if the vote was found
        if (!$vote) {
            // Show error message
            return redirect('/votes/create')->withInput()
                ->with('error', 'These votes are not charged, please do it!');
        }
        return view('entities.votes.show-vote', compact(['vote', 'year']));
    }

    /**
     * Show the form to edit the specified resource.
     */

    public function edit(Request $request, $year, $province_id, $alternative_id)
    {
        $elections = Election::orderby('date', 'desc')->get();
        $provinces = Province::orderby('id')->get();
        $alternatives = Alternative::orderby('id')->get();

        // Find the election based on the provided year
        $election = Election::whereYear('date', $year)->first();
        // Check if the election was found
        if (!$election) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        $vote = Vote::where([
            'election_id' => $election->id,
            'province_id' => $province_id,
            'alternative_id' => $alternative_id,
        ])->first(); //TODO set the exception in app\Exceptions\Handler.php
        if (!$vote) {
            // Show error message
            return redirect('/votes/create')->withInput()
                ->with('error', 'These votes are not charged, please do it!');
        }
        return view('entities.votes.edit', compact('elections', 'provinces', 'alternatives', 'vote', 'year'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request)
    {
        // Validates inputs
        $this->validate($request, [
            'election' => 'required|numeric',
            'province' => 'required|numeric',
            'alternative' => 'required|numeric',
            'quantity' => 'required|numeric|min:0',
        ]);
        $existingVote = Vote::where([
            'election_id' => $request->input('election'),
            'province_id' => $request->input('province'),
            'alternative_id' => $request->input('alternative'),
        ])->first();
        if ($existingVote) {
            Vote::where([
                'election_id' => $request->election,
                'province_id' => $request->province,
                'alternative_id' => $request->alternative,
            ])->update([
                'election_id' => $request->election,
                'province_id' => $request->province,
                'alternative_id' => $request->alternative,
                'quantity' => $request->quantity ? $request->quantity : 0,
            ]);
        } else {
            Vote::create([
                'election_id' => $request->election,
                'province_id' => $request->province,
                'alternative_id' => $request->alternative,
                'quantity' => $request->quantity
            ]);
        }
        // Get the new vote's year to send to the url
        $electionDate = Election::where([
            'id' => $request->election
        ])->first()->date;
        if (!$electionDate) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        $year = date('Y', strtotime($electionDate));
        return redirect(route('results.showByYear', $year));
    }

    /**
     * Remove the specified vote from that year(id), that province, that alternative.
     */

    public function destroy(Request $request, $election_id, $province_id, $alternative_id)
    {
        //Checks if is coming from edit or whow view
        if ($request->election) {
            // Deletes if comes from edit vote view
            Vote::where([
                'election_id' => $request->election,
                'province_id' => $request->province,
                'alternative_id' => $request->alternative,
            ])->delete();
        } else {
            // Deletes if comes from show vote view
            Vote::where([
                'election_id' => $election_id,
                'province_id' => $province_id,
                'alternative_id' => $alternative_id,
            ])->delete();
        }

        // Get the new vote's year to send to the url
        $election = Election::where([
            'id' => $election_id
        ])->first();
        if (!$election) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        $electionDate = $election->date;
        $year = date('Y', strtotime($electionDate));

        return redirect(route('results.showByYear', $year));
    }
}
