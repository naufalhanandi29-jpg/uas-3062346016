<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // ⬇️ TAMBAHKAN METHOD INI
    public function index()
    {
        $data = Pendaftaran::all();
        return view('pendaftaran.index', compact('data'));
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        Pendaftaran::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'hobi' => implode(',', $request->hobi),
            'komentar' => $request->komentar,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/pendaftaran/create');
    }
        public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pendaftaran::findOrFail($id);

        $data->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'hobi' => implode(',', $request->hobi),
            'komentar' => $request->komentar,
        ]);

        return redirect('/pendaftaran');
    }

    public function destroy($id)
    {
        $data = Pendaftaran::findOrFail($id);
        $data->delete();

        return redirect('/pendaftaran');
    }
}
