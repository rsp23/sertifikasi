<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('home', ["siteName" => "Home"], compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMember', ["siteName" => "Create Anggota"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'NIK' => 'required|unique:members',
            'nama' => 'required',
            'noHp' => 'required',
            'gambar' => 'image|file|max:1024',

        ]);
        //jika ada input file gambar, maka file disimpan
        if ($request->file('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('profil');
        }

        Member::create([
            'NIK' => $validated['NIK'],
            'nama' => $validated['nama'],
            'noHp' => $validated['noHp'],
            'gambar' => $validated['gambar'],
        ]);

        return redirect('/')->with('success', 'Kamu berhasil menambahkan data anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);

        return view('editMember', ["siteName" => "Edit Member"], compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'NIK' => 'required',
            'nama' => 'required',
            'noHp' => 'required',
            'gambar' => 'image|file|max:1024',
        ]);
        //cek file gambar kalau ada hapus filelama ganti baru
        if ($request->file('gambar')) {
            Storage::delete($request->oldImage);
            $validated['gambar'] = $request->file('gambar')->store('profil');
        }

        Member::where('id', $id)
            ->update($validated);
        return redirect('member')->with('success', 'Berhasil edit anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
