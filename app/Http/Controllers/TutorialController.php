<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('tutorials.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutorials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|unique:tutorials',
            'title' => 'required',
        ]);

        $tutorial = new Tutorial([
            'url' => $request->get('url'),
            'title' => $request->get('title'),
        ]);
        $tutorial->save();

        return redirect('/tutorials')->with('success', 'Tutorial saved!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tutorial = Tutorial::find($id);
        return view('tutorials.show', compact('tutorial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tutorial = Tutorial::find($id);
        return view('tutorials.edit', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'url' => 'required',
            'title' => 'required',
        ]);

        $tutorial = Tutorial::find($id);
        $tutorial->url = $request->get('url');
        $tutorial->title = $request->get('title');
        $tutorial->save();

        return redirect('/tutorials')->with('success', 'Tutorial updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();

        return redirect('/tutorials')->with('success', 'Tutorial deleted!');
    }
}