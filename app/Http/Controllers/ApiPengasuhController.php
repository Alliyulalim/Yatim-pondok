<?php

namespace App\Http\Controllers;
use App\Models\pengasuh;
use Illuminate\Http\Request;

class ApiPengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengasuh = Pengasuh::where('id' , 1)->get();

        if($pengasuh->count() >= 1 ){

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Berhasil',
                'data' => $pengasuh,
        ]);

        }else{
        return response()->json([
            'status' => true,
            'code' => 404,
            'message' => 'gagal',
        ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengasuh = new Pengasuh;
        $pengasuh->id_pengasuhs = $request->id_pengasuhs;
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        $pengasuh->save();
        return response()->json([
                'status' => true,
                'message' => 'Berhasil membuat user',
                'data' => $pengasuh,
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengasuh = Pengasuh::find($id);

        if($pengasuh){

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'show data user',
                'data' => $pengasuh,
        ]);

        }else{
        return response()->json([
            'status' => false,
            'code' => 404,
            'message' => 'data user tidak ditemukan',
            'data' => [],
        ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pengasuh = Pengasuh::find($id);
        if($pengasuh){
            $pengasuh = new Pengasuh;
            $pengasuh->id_pengasuhs = $request->id_pengasuhs;
            $pengasuh->nama_pengasuh = $request->nama_pengasuh;
            $pengasuh->jk = $request->jk;
            $pengasuh->tgl_lahir = $request->tgl_lahir;
            $pengasuh->save();
            return response()->json([
                    'status' => true,
                    'message' => 'Berhasil membuat user',
                    'data' => $pengasuh,
            ],201);

        }else{
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'data user tidak ditemukan',
                'data' => [],
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengasuh = Pengasuh::find($id);

        if($pengasuh){

            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'data user berhasil dihapus',
                'data' => $pengasuh,
        ]);

        }else{
        return response()->json([
            'status' => false,
            'code' => 404,
            'message' => 'data user tidak ditemukan',
            'data' => [],
        ]);
        }
    }
}
