<?php

namespace App\Http\Controllers;

use App\Models\Pelanggar;
use App\Http\Requests\StorePelanggarRequest;
use App\Http\Requests\UpdatePelanggarRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

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
        $validatedData = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Store the file on the 'pelanggar' disk
            $filePath = $file->storeAs('', $filename, 'pelanggar');

            // Store file path or name in the database if needed
            $validatedData['file'] = $filePath;
        }

        Pelanggar::create($validatedData);

        return redirect()->route('pelanggar.index')->with('success', 'Pelanggar added successfully!');
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
        // First, get all validated data from the request
        $validatedData = $request->validated();

        // Handle the file replacement if a new file is uploaded
        if ($request->hasFile('file')) {
            // Check if there's an existing file
            if ($pelanggar->file && Storage::disk('pelanggar')->exists($pelanggar->file)) {
                // Delete the existing file
                Storage::disk('pelanggar')->delete($pelanggar->file);
            }

            // Upload the new file
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('', $filename, 'pelanggar');

            // Update the file path in the validated data array
            $validatedData['file'] = $filePath;
        } else {
            // If no new file is uploaded and we want to keep the old file
            $validatedData['file'] = $pelanggar->file;
        }

        // Update the model with the validated data
        $pelanggar->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('pelanggar.index')->with('success', 'Pelanggar updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggar $pelanggar)
    {
        if ($pelanggar->file) {
            // Construct the full path to the file
            $fileExists = Storage::disk('pelanggar')->exists($pelanggar->file);

            Log::info('Checking existence of file: ' . $pelanggar->file . ', Exists: ' . ($fileExists ? 'Yes' : 'No'));

            if ($fileExists) {
                // Delete the file if it exists
                $deleted = Storage::disk('pelanggar')->delete($pelanggar->file);
                Log::info('Deletion attempt for: ' . $pelanggar->file . ', Success: ' . ($deleted ? 'Yes' : 'No'));

                if (!$deleted) {
                    // Log the failure or handle it as needed
                    return back()->with('error', 'Failed to delete the file.');
                }
            } else {
                Log::warning('File does not exist, cannot delete: ' . $pelanggar->file);
            }
        }
        // Delete the pelanggar record
        $pelanggar->delete();

        // Redirect to the pelanggar index with a success message
        return redirect()->route('pelanggar.index')->with('success', 'Pelanggar has been successfully deleted.');
    }
}
