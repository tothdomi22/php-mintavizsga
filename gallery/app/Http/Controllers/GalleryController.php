<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\ImageUpload;
use App\Http\Requests\GalleryRequest;

use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gallery.index', [
            'galleries' => Gallery::query()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        $validated = $this->getValidated($request);
        Gallery::query()->create($validated);
        return redirect('/')->with('success', 'asdf');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $validated = $this->getValidated($request);

        if ($request->has('image')){
            if ($gallery->image_url) {
                Storage::disk('images')->delete($gallery->image_url);
            }
        }

        if (isset($validated['delete-image'])){
            Storage::disk('images')->delete($gallery->image_url);
            $validated['image_url']=null;
        }

        $gallery::update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image_url) {
            Storage::disk('images')->delete($gallery->image_url);
        }
        $gallery->delete();
    }
}
