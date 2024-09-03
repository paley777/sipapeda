<?php

namespace App\Http\Controllers;

use App\Models\Pergub;
use App\Http\Requests\StorePergubRequest;
use App\Http\Requests\UpdatePergubRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PergubsImport;

class PergubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pergubs = Pergub::orderBy('created_at', 'desc')->get();
        return view('dashboard.pergub.index', compact('pergubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function importExcel(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new PergubsImport(), $request->file('file'));

        return redirect()->route('pergub.index')->with('success', 'Data Pergub berhasil diimpor.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePergubRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Store the file on the 'perda' disk
            $filePath = $file->storeAs('', $filename, 'pergub');

            // Store file path or name in the database if needed
            $validatedData['file'] = $filePath;
        }

        Pergub::create($validatedData);

        return redirect()->route('pergub.index')->with('success', 'Peraturan Gubernur added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pergub $pergub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pergub $pergub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePergubRequest $request, Pergub $pergub)
    {
        // First, get all validated data from the request
        $validatedData = $request->validated();

        // Handle the file replacement if a new file is uploaded
        if ($request->hasFile('file')) {
            // Check if there's an existing file
            if ($pergub->file && Storage::disk('pergub')->exists($pergub->file)) {
                // Delete the existing file
                Storage::disk('pergub')->delete($pergub->file);
            }

            // Upload the new file
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('', $filename, 'pergub');

            // Update the file path in the validated data array
            $validatedData['file'] = $filePath;
        } else {
            // If no new file is uploaded and we want to keep the old file
            $validatedData['file'] = $pergub->file;
        }

        // Update the model with the validated data
        $pergub->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('pergub.index')->with('success', 'Pergub updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pergub $pergub)
    {
        if ($pergub->file) {
            // Construct the full path to the file
            $fileExists = Storage::disk('pergub')->exists($pergub->file);

            Log::info('Checking existence of file: ' . $pergub->file . ', Exists: ' . ($fileExists ? 'Yes' : 'No'));

            if ($fileExists) {
                // Delete the file if it exists
                $deleted = Storage::disk('pergub')->delete($pergub->file);
                Log::info('Deletion attempt for: ' . $pergub->file . ', Success: ' . ($deleted ? 'Yes' : 'No'));

                if (!$deleted) {
                    // Log the failure or handle it as needed
                    return back()->with('error', 'Failed to delete the file.');
                }
            } else {
                Log::warning('File does not exist, cannot delete: ' . $pergub->file);
            }
        }
        // Delete the Perda record
        $pergub->delete();

        // Redirect to the Perda index with a success message
        return redirect()->route('pergub.index')->with('success', 'Peraturan Gubernur has been successfully deleted.');
    }
}
