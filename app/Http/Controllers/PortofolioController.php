<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portofolio::all();
        return view('portofolio.index', [
            'data' => $data,
            'active' => 'portofolio'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portofolio.create', [
            'active' => 'portofolio'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Portofolio::create([
                'name' => $request->name,
                'partner' => $request->partner,
                'year' => $request->year
            ]);
            return redirect()->route('portofolio.index')->with('success', 'Data Portofolio Berhasil Ditambahkan!');
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
        return view('portofolio.edit', [
            'data' => Portofolio::where('id', $id)->first(),
            'active' => 'portofolio'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Portofolio::where('id', $id)->update([
                'name' => $request->name,
                'partner' => $request->partner,
                'year' => $request->year
            ]);
            return redirect()->route('portofolio.index')->with('success', 'Data Portofolio Berhasil Diubah!');
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
            Portofolio::where('id', $id)->delete();
            return redirect()->route('portofolio.index')->with('success', 'Data Portofolio Berhasil Dihapus!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}