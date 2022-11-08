<?php

namespace App\Http\Controllers;

use App\Models\Loker;

use Illuminate\Http\Request;


class LokerController extends Controller
{
    public function index()
    {
        //mengambil data loker
        $loker = Loker::all();

        //mengirim data student ke view loker
        return view('dataloker.loker', ['loker' => $loker]);
    }
    public function tambah()
    {
        return view('dataloker.loker_tambah');
    }
    public function detail($id)
    {
        $loker = Loker::find($id);
        return view('dataloker.loker_detail', ['loker' => $loker]);
    }



    public function simpan(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama_pekerjaan' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi' => 'required',
            'gaji' => 'required',
            'gambar' => 'required'
        ]);

        Loker::create([
            'id' => $request->id,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'lokasi' => $request->lokasi,
            'gaji' => $request->gaji,
            'gambar' => $request->gambar
        ]);

        return redirect("/dataloker/loker");
    }
    public function edit($id)
    {
        $loker = Loker::find($id);
        return view('dataloker.loker_edit', ['loker' => $loker]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama_pekerjaan' => 'required',
            'nama_perusahaan' => 'required',
            'lokasi' => 'required',
            'gaji' => 'required',
            'gambar' => 'required'
        ]);

        $loker = Loker::find($id);
        $loker->id = $request->id;
        $loker->nama_pekerjaan = $request->nama_pekerjaan;
        $loker->nama_perusahaan = $request->nama_perusahaan;
        $loker->lokasi = $request->lokasi;
        $loker->gaji = $request->gaji;
        $loker->gambar = $request->gambar;
        $loker->save();

        return redirect('/dataloker/loker');
    }
    public function delete($id)
    {
        $loker = Loker::find($id);
        $loker->delete();

        return redirect('/dataloker/loker');
    }
}
