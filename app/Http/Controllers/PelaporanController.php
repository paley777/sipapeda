<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Http\Requests\StorePelaporanRequest;
use App\Http\Requests\UpdatePelaporanRequest;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelaporans = Pelaporan::orderBy('created_at', 'desc')->get();
        return view('dashboard.pelaporan.index', compact('pelaporans'));
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
    public function store(StorePelaporanRequest $request)
    {
        $validatedData = $request->validated();

        Pelaporan::create($validatedData);

        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePelaporanRequest $request, Pelaporan $pelaporan)
    {
        // First, get all validated data from the request
        $validatedData = $request->validated();

        // Update the model with the validated data
        $pelaporan->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelaporan $pelaporan)
    {
        
        // Delete the Pelaporan record
        $pelaporan->delete();

        // Redirect to the Perda index with a success message
        return redirect()->route('pelaporan.index')->with('success', 'Pelaporan has been successfully deleted.');
    }
}
