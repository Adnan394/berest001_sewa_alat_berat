<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gallery.index', [
            'active' => 'gallery',
            'data' => Gallery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create', [
            'active' => 'gallery'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName(); // Ambil nama file asli
                $image->move(public_path('img/gallery'), $filename);
                $filename = 'img/gallery/' . $filename;
                Gallery::create([
                    'image' => $filename
                ]);
                return redirect()->route('gallery.index')->with('success', 'Data Galeri Berhasil Ditambahkan!');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
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
    public function edit(string $id)
    {
        return view('gallery.edit', [
            'data' => Gallery::where('id', $id)->first(),
            'active' => 'gallery'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName(); // Ambil nama file asli
                $image->move(public_path('img/gallery'), $filename);
                $filename = 'img/gallery/' . $filename;
                Gallery::where('id', $id)->update([
                    'image' => $filename
                ]);
                return redirect()->route('gallery.index')->with('success', 'Data Galeri Berhasil Diubah!');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Gallery::where('id', $id)->delete();
            return redirect()->route('gallery.index')->with('success', 'Data Galeri Berhasil Dihapus!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}