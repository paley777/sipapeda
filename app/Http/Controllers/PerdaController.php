<?php

namespace App\Http\Controllers;

use App\Models\Perda;
use App\Http\Requests\StorePerdaRequest;
use App\Http\Requests\UpdatePerdaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PerdasImport;

class PerdaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perdas = Perda::orderBy('created_at', 'desc')->get();
        return view('dashboard.perda.index', compact('perdas'));
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

        Excel::import(new PerdasImport(), $request->file('file'));

        return redirect()->route('perda.index')->with('success', 'Data Perda berhasil diimpor.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerdaRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Store the file on the 'perda' disk
            $filePath = $file->storeAs('', $filename, 'perda');

            // Store file path or name in the database if needed
            $validatedData['file'] = $filePath;
        }

        Perda::create($validatedData);

        return redirect()->route('perda.index')->with('success', 'Peraturan Daerah added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perda $perda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perda $perda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePerdaRequest $request
     * @param \App\Models\Perda $perda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerdaRequest $request, Perda $perda)
    {
        // First, get all validated data from the request
        $validatedData = $request->validated();

        // Handle the file replacement if a new file is uploaded
        if ($request->hasFile('file')) {
            // Check if there's an existing file
            if ($perda->file && Storage::disk('perda')->exists($perda->file)) {
                // Delete the existing file
                Storage::disk('perda')->delete($perda->file);
            }

            // Upload the new file
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('', $filename, 'perda');

            // Update the file path in the validated data array
            $validatedData['file'] = $filePath;
        } else {
            // If no new file is uploaded and we want to keep the old file
            $validatedData['file'] = $perda->file;
        }

        // Update the model with the validated data
        $perda->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('perda.index')->with('success', 'Perda updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perda $perda)
    {
        if ($perda->file) {
            // Construct the full path to the file
            $fileExists = Storage::disk('perda')->exists($perda->file);

            Log::info('Checking existence of file: ' . $perda->file . ', Exists: ' . ($fileExists ? 'Yes' : 'No'));

            if ($fileExists) {
                // Delete the file if it exists
                $deleted = Storage::disk('perda')->delete($perda->file);
                Log::info('Deletion attempt for: ' . $perda->file . ', Success: ' . ($deleted ? 'Yes' : 'No'));

                if (!$deleted) {
                    // Log the failure or handle it as needed
                    return back()->with('error', 'Failed to delete the file.');
                }
            } else {
                Log::warning('File does not exist, cannot delete: ' . $perda->file);
            }
        }
        // Delete the Perda record
        $perda->delete();

        // Redirect to the Perda index with a success message
        return redirect()->route('perda.index')->with('success', 'Peraturan Daerah has been successfully deleted.');
    }
}
