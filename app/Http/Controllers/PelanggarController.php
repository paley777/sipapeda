<?php

namespace App\Http\Controllers;

use App\Models\Pelanggar;
use App\Http\Requests\StorePelanggarRequest;
use App\Http\Requests\UpdatePelanggarRequest;

class PelanggarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggars = Pelanggar::orderBy('created_at', 'desc')->get();
        return view('dashboard.pelanggar.index', compact('pelanggars'));
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
    public function store(StorePelanggarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggar $pelanggar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggar $pelanggar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePelanggarRequest $request, Pelanggar $pelanggar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggar $pelanggar)
    {
        //
    }
}
