<?php

namespace App\Http\Controllers;

use App\Models\form_donasi;
use Alert;
use Illuminate\Http\Request;

class FormDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form_donasi = form_donasi::all();
        return view('form_donasi.index', compact('form_donasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_donasi.create');
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
            'nama_donatur' => 'required',
            'email' => 'required|unique:form_donasis',
            'no_tlp' => 'required',
            'nominal' => 'required',
            'tgl_transfer' => 'required',
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'transfer_kebank' => 'required',

        ]);

        $form_donasi = new form_donasi;
        $form_donasi->nama_donatur = $request->nama_donatur;
        $form_donasi->email = $request->email;
        $form_donasi->no_tlp = $request->no_tlp;
        $form_donasi->nominal = $request->nominal;
        $form_donasi->tgl_transfer = $request->tgl_transfer;
        $form_donasi->nama_bank = $request->nama_bank;
        $form_donasi->no_rek = $request->no_rek;
        $form_donasi->transfer_kebank = $request->transfer_kebank;
        Alert::success('Good Job', 'Berhasil Menambah Data');
        $form_donasi->save();
        return redirect()->route('form_donasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\form_donasi  $form_donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form_donasi = form_donasi::findOrFail($id);
        return view('form_donasi.show', compact('form_donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\form_donasi  $form_donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form_donasi = form_donasi::findOrFail($id);
        return view('form_donasi.edit', compact('form_donasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\form_donasi  $form_donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_donatur' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'nominal' => 'required',
            'tgl_transfer' => 'required',
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'transfer_kebank' => 'required',

        ]);

        $form_donasi =  form_donasi::findOrFail($id);
        $form_donasi->nama_donatur = $request->nama_donatur;
        $form_donasi->email = $request->email;
        $form_donasi->no_tlp = $request->no_tlp;
        $form_donasi->nominal = $request->nominal;
        $form_donasi->tgl_transfer = $request->tgl_transfer;
        $form_donasi->nama_bank = $request->nama_bank;
        $form_donasi->no_rek = $request->no_rek;
        $form_donasi->transfer_kebank = $request->transfer_kebank;
        Alert::success('Good Job', 'Berhasil Mengubah Data');
        $form_donasi->save();
        return redirect()->route('form_donasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\form_donasi  $form_donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form_donasi = form_donasi::findOrFail($id);
        Alert::success('Good Job', 'Data deleted successfully');
        $form_donasi->delete();
        return redirect()->route('form_donasi.index');
    }
}
