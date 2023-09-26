<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternatives = Alternative::all();
        return view('entities.alternatives.index')->with('alternatives', $alternatives);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entities.alternatives.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alternative = new Alternative();
        $alternative->name = $request->get('name');
        $alternative->presi_vice = $request->get('presi_vice');
        $alternative->logo = $request->get('logo');

        $alternative->save();

        return redirect('/alternatives');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alternative = Alternative::find($id);
        if (!$alternative) {
            return abort(404); // TODO: Handle the case where the election is not found
        }

        return view('entities.alternatives.show')->with('alternative', $alternative);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $alternative = Alternative::find($id);

        return view('entities.alternatives.edit')->with('alternative', $alternative);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alternative = Alternative::find($id);
        $alternative->name = $request->get('name');
        $alternative->presi_vice = $request->get('presi_vice');
        $alternative->logo = $request->get('logo');

        $alternative->save();
        return redirect('/alternatives');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request, string $id)
    {
        $alternative = Alternative::find($id);
        if (!$alternative) {
            return abort(404); // TODO: Handle the case where the election is not found
        }
        if (!empty(Vote::where(['alternative_id' => $alternative->id])->first()->quantity)) {
            if (!$request->has('confirm-delete')) {
                // Si hay votos asociados, muestra el mensaje de error
                return redirect()->back()->with('error', 'This alternative has votes associated. Are you sure you want to delete it? Confirm it by checking the box')
                    ->with('id', $id);
            }
        }
        //First delete de associated vote
        // FIXME should be a better way to find by just one parameter
        Vote::where(['alternative_id' => $alternative->id])->delete();
        // Delete the alternative
        $alternative->delete();
        return redirect('/alternatives');
    }
}
