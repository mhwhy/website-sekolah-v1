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
        return view('dataguru.guru', ['guru' => $teacher]);
    }

    public function tambah()
    {
        return view('dataguru.guru_tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        Teacher::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'mapel' => $request->mapel,
            'alamat' => $request->alamat,
            'foto' => $request->foto,
        ]);

        return redirect('/dataguru/guru');
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('dataguru.guru_edit', ['guru' => $teacher]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'mapel' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
        ]);

        $teacher = Teacher::find($id);
        $teacher->id = $request->id;
        $teacher->nama = $request->nama;
        $teacher->jenis_kelamin = $request->jenis_kelamin;
        $teacher->mapel = $request->mapel;
        $teacher->foto = $request->foto;
        $teacher->save();

        return redirect('/dataguru/guru');
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect('/dataguru/guru');
    }
}
