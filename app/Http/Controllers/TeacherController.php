<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        //mengambil data guru
        $teacher = Teacher::all();

        //mengirim data teacher ke view guru
        return view('Dashboard.guru.index', ['guru' => $teacher]);
    }
    public function index2()
    {
        //mengambil data guru
        $teacher = Teacher::all();

        //mengirim data teacher ke view guru
        return view('dataguru.guru', ['guru' => $teacher]);
    }

    public function tambah()
    {
        return view('Dashboard.guru.guru_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        Teacher::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
        ]);

        return redirect('/Dashboard/guru');
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('Dashboard.guru.guru_edit', ['guru' => $teacher]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        $teacher = Teacher::find($id);
        $teacher->id = $request->id;
        $teacher->nama = $request->nama;
        $teacher->mapel = $request->mapel;
        $teacher->alamat = $request->alamat;
        $teacher->foto = $request->foto;
        $teacher->save();

        return redirect('/Dashboard/guru');
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect('/Dashboard/guru');
    }
}
