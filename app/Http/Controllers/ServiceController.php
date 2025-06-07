<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MasterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('service.index', [
            'data' => $data,
            'active' => 'service'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create', [
            'active' => 'service'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $filename = "";
            if($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotoFile->move(public_path('img/service'));
                $filename = 'img/service/'. $fotoFile->getClientOriginalName();
            }
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make("user12345"),
                'role' => 'Guru',
                'deskripsi' => $request->deskripsi
            ]);

            MasterUser::create([
                'user_id' => $user->id,
                'nama_lengkap' => $request->nama_lengkap,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'foto' => $filename
            ]);

            DB::commit();
            return redirect()->route('service.index')->with('success', 'Data Service Berhasil Ditambahkan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('service.index')->with('error', 'Data Service Gagal Ditambahkan! Error: ' . $e->getMessage());
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
        $data = User::with('master_user')->where('id', $id)->first();
        return view('service.edit', [
            'data' => $data,
            'active' => 'service'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $filename = "";
            if($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotoFile->move(public_path('img/service'));
                $filename = 'img/service/'. $fotoFile->getClientOriginalName();
            }
            $user = User::find($id);
            $user->update([
                'username' => $request->username,
                'email' => $request->email,
                'deskripsi' => $request->deskripsi
            ]);

            $masterUser = MasterUser::where('user_id', $id)->first();
            $masterUser->update([
                'nama_lengkap' => $request->nama_lengkap,
                'alamat' => $request->alamat,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'foto' => $filename
            ]);

            DB::commit();
            return redirect()->route('service.index')->with('success', 'Data Service Berhasil Diubah!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('service.index')->with('error', 'Data Service Gagal Diubah! Error: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $user = User::find($id);
            $user->delete();
            DB::commit();
            return redirect()->route('service.index')->with('success', 'Data Service Berhasil Dihapus!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('service.index')->with('error', 'Data Service Gagal Dihapus! Error: ' . $th->getMessage());
        }
    }
}