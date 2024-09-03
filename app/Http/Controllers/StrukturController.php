<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use App\Http\Requests\StoreStrukturRequest;
use App\Http\Requests\UpdateStrukturRequest;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strukturs = Struktur::orderBy('created_at', 'asc')->get();
        return view('dashboard.struktur.index', compact('strukturs'));
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
    public function store(StoreStrukturRequest $request)
    {
        $validatedData = $request->validated();

        Struktur::create($validatedData);

        return redirect()->route('struktur.index')->with('success', 'Struktur added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Struktur $struktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStrukturRequest $request, Struktur $struktur)
    {
        // First, get all validated data from the request
        $validatedData = $request->validated();

        // Update the model with the validated data
        $struktur->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('struktur.index')->with('success', 'Struktur updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktur $struktur)
    {
        // Delete the Pelaporan record
        $struktur->delete();

        // Redirect to the Perda index with a success message
        return redirect()->route('struktur.index')->with('success', 'Struktur has been successfully deleted.');
    }
}
