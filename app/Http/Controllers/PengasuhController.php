<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;
use Alert;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengasuh = Pengasuh::all();
        return view('pengasuh.index', compact('pengasuh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengasuh.create');
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

            'nama_pengasuh' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $pengasuh = new Pengasuh;
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        Alert::success('Good Job', 'Berhasil Menambah Data');
        $pengasuh->save();
        return redirect()->route('pengasuh.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        return view('pengasuh.show', compact('pengasuh'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        return view('pengasuh.edit', compact('pengasuh'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_pengasuh' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $pengasuh = Pengasuh::findOrFail($id);
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        Alert::success('Good Job', 'Berhasil Mengubah Data');
        $pengasuh->save();
        return redirect()->route('pengasuh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Pengasuh::destroy($id)) {
            return redirect()->back();
        } else {
            Alert::success('Berhasil', 'Mengapus Data ' . $pengasuh->nama_pengasuh);
            return redirect()->back();
        }
    }
}
