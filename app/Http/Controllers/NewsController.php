<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newses = News::orderBy('created_at', 'desc')->get();
        return view('dashboard.news.index', compact('newses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Store the file on the 'perda' disk
            $filePath = $file->storeAs('', $filename, 'news');

            // Store file path or name in the database if needed
            $validatedData['thumbnail'] = $filePath;
        }

        // Generate a slug from the title
        $baseSlug = Str::slug($validatedData['judul']);
        $validatedData['slug'] = $baseSlug;

        // Find existing slugs with the same base
        $existingSlugs = News::where('slug', 'like', $baseSlug . '%')
            ->pluck('slug')
            ->toArray();

        if (in_array($baseSlug, $existingSlugs)) {
            $i = 1;
            // Increment $i until we find a non-existing slug
            while (in_array($baseSlug . '-' . $i, $existingSlugs)) {
                $i++;
            }
            $validatedData['slug'] = $baseSlug . '-' . $i;
        }

        News::create($validatedData);

        return redirect()->route('berita.index')->with('success', 'News added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $beritum)
    {
        $news = $beritum;
        return view('dashboard.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $beritum)
    {
        $news = $beritum;
        // First, get all validated data from the request
        $validatedData = $request->validated();
        // Handle the file replacement if a new file is uploaded
        if ($request->hasFile('thumbnail')) {
            // Check if there's an existing file
            if ($news->thumbnail && Storage::disk('news')->exists($news->thumbnail)) {
                // Delete the existing file
                Storage::disk('news')->delete($news->thumbnail);
            }
            // Upload the new file
            $file = $request->file('thumbnail');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('', $filename, 'news');

            // Update the file path in the validated data array
            $validatedData['thumbnail'] = $filePath;
        } else {
            // If no new file is uploaded and we want to keep the old file
            $validatedData['thumbnail'] = $news->thumbnail;
        }

        // Update the model with the validated data
        $news->update($validatedData);

        // Redirect back or to another page with a success message
        return redirect()->route('berita.index')->with('success', 'News updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $beritum)
    {
        $news = $beritum;
        if ($news->thumbnail) {
            // Construct the full path to the file
            $fileExists = Storage::disk('news')->exists($news->thumbnail);

            Log::info('Checking existence of file: ' . $news->thumbnail . ', Exists: ' . ($fileExists ? 'Yes' : 'No'));

            if ($fileExists) {
                // Delete the file if it exists
                $deleted = Storage::disk('news')->delete($news->thumbnail);
                Log::info('Deletion attempt for: ' . $news->thumbnail . ', Success: ' . ($deleted ? 'Yes' : 'No'));

                if (!$deleted) {
                    // Log the failure or handle it as needed
                    return back()->with('error', 'Failed to delete the file.');
                }
            } else {
                Log::warning('File does not exist, cannot delete: ' . $news->thumbnail);
            }
        }
        // Delete the News record
        $news->delete();

        // Redirect to the News index with a success message
        return redirect()->route('berita.index')->with('success', 'News has been successfully deleted.');
    }
}
