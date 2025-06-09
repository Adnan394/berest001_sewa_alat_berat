<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', [
            'data' => $data,
            'active' => 'produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create', [
            'active' => 'produk'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $image = "";
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName(); // Ambil nama file asli
                $image->move(public_path('img/produk'), $filename);
                $image = 'img/produk/' . $filename;
            }
            
            $docs = "";
            if($request->hasFile('docs')) {
                $docs = $request->file('docs');
                $filename = $docs->getClientOriginalName(); // Ambil nama file asli
                $docs->move(public_path('docs'), $filename);
                $docs = 'docs/' . $filename;
            }

            $meta = Meta::create([
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'keywords' => $request->meta_keywords,
                'author' => "Rafa Jaya Crane"
            ]);
            
            Produk::create([
                'title' => $request->judul,
                'slug' => Str::slug($request->judul),
                'description' => $request->deskripsi,
                'image' => $image,
                'dokumen' => $docs,
                'id_meta' => $meta->id
            ]);

            DB::commit();
            return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('produk.index')->with('error', 'Data Produk Gagal Ditambahkan! Error: ' . $e->getMessage());
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
        $data = Produk::where('id', $id)->first();
        return view('produk.edit', [
            'data' => $data,
            'active' => 'produk',
            'meta' => Meta::where('id', $data->id_meta)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName(); // Ambil nama file asli
                $image->move(public_path('img/produk'), $filename);
                $image = 'img/produk/' . $filename;
            }
            $docs = "";
            if($request->hasFile('docs')) {
                $docs = $request->file('docs');
                $filename = $docs->getClientOriginalName(); // Ambil nama file asli
                $docs->move(public_path('docs'), $filename);
                $docs = 'docs/' . $filename;
            }

            $data = Produk::where('id', $id)->first();
            $data->title = $request->judul;
            $data->slug = Str::slug($request->judul);
            $data->description = $request->deskripsi;
            if (isset($image)) {
                $data->image = $image;
            }
            if (isset($docs)) {
                $data->dokumen = $docs;
            }
            $data->save();

            $meta = Meta::where('id', Produk::where('id', $id)->first()->id_meta)->first();
            $meta->title = $request->meta_title;
            $meta->description = $request->meta_description;
            $meta->keywords = $request->meta_keywords;
            $meta->save();
            
            DB::commit();
            return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Diubah!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('produk.index')->with('error', 'Data Produk Gagal Diubah! Error: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $produk = Produk::find($id);
            $produk->delete();

            $meta = Meta::where('id', $produk->id_meta)->first();
            $meta->delete();
            DB::commit();
            return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Dihapus!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('produk.index')->with('error', 'Data Produk Gagal Dihapus! Error: ' . $th->getMessage());
        }
    }
}