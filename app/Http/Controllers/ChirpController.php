<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirp::with('user')
            ->latest()
            ->take(10)
            ->get();

        return view('home', ['chirps' => $chirps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|between:5,255',
        ], [
            'message.required' => 'Your chirp cannot be empty!',
            'message.between' => 'Your chirps must be between 5 to 255 characters',
        ]);
    
        Chirp::create([
            'message' => $validated['message'],
        ]);
    
        return redirect('/')->with('success', 'Chirp created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', compact('chirp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'message' => 'required|string|between:5,255',
        ], [
            'message.required' => 'Your chirp cannot be empty!',
            'message.between' => 'Your chirps must be between 5 to 255 characters',
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', 'Your chirp has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
    
        return redirect('/')->with('success', 'Your chirp has been deleted!');
    }
}
