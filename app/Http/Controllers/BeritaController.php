<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Berita::all();
        return view('berita.index', [
            'data' => $data,
            'active' => 'berita'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create', [
            'active' => 'berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $filename = "";
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName(); // Ambil nama file asli
                $image->move(public_path('img/berita'), $filename);
                $filename = 'img/berita/' . $filename;
            }

            $meta = Meta::create([
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'keywords' => $request->meta_keywords,
                'author' => "Rafa Jaya Crane"
            ]);
            Berita::create([
                'title' => $request->judul,
                'slug' => Str::slug($request->judul),
                'description' => $request->deskripsi,
                'image' => $filename,
                'id_meta' => $meta->id
            ]);

            return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Ditambahkan!');
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
        return view('berita.edit', [
            'data' => Berita::where('id', $id)->first(),
            'meta' => Meta::where('id', Berita::where('id', $id)->first()->id_meta)->first(),
            'active' => 'berita'
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
                $image->move(public_path('img/berita'), $filename);
                $data = Berita::where('id', $id)->first();
                $data->image = 'img/berita/' . $filename;
                $data->save();
            }

            $data = Berita::where('id', $id)->first();
            $data->title = $request->judul;
            $data->slug = Str::slug($request->judul);
            $data->description = $request->deskripsi;
            $data->save();

            $meta = Meta::where('id', $data->id_meta)->first();
            $meta->title = $request->meta_title;
            $meta->description = $request->meta_description;
            $meta->keywords = $request->meta_keywords;
            $meta->save();
            return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Diubah!');
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
            $data = Berita::where('id', $id)->first();
            $data->delete();

            $meta = Meta::where('id', $data->id_meta)->first();
            $meta->delete();
            return redirect()->route('berita.index')->with('success', 'Data Berita Berhasil Dihapus!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}