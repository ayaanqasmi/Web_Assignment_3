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
        return response()->json($tutorials);
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



        $tutorial = Tutorial::create([
            'url' => $request->url,
            'title' => $request->title
        ]);

        return response()->json(['message' => 'Totorial added successfully!', 'service' => $tutorial], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tutorial = Tutorial::find($id);
        return response()->json($tutorial);
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

        
        return response()->json(['message' => 'Tutorial updated successfully!', 'tutorial' => $tutorial]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();

        return response()->json(['message' => 'Tutorial deleted successfully!']);
    }
}
