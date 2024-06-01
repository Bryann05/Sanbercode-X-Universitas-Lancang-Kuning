<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CastController extends Controller
{
    
    public function index()
    {
        $cast = Cast::all();
        return view('cast.tampil', ['cast' => $cast]);
    }


    public function create()
    {
        return view('cast.tambah');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib di isi',
            'umur.requred' => 'Umur wajib di isi',
            'bio.required' => 'Bio wajib di isi',
        ]);

        $cast = new Cast;
        $cast->nama = $request->input('nama');
        $cast->umur = $request->input('umur');
        $cast->bio = $request->input('bio');

        $cast->save();

        return redirect('/cast');
    }



    public function show(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.detail', ['cast' => $cast]);
    }



    public function edit(string $id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', ['cast' => $cast]);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama wajib di isi',
            'umur.requred' => 'Umur wajib di isi',
            'bio.required' => 'Bio wajib di isi',
        ]);

        Cast::where('id', $id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'umur' => $request->input('umur'),
                    'bio' => $request->input('bio'),
                ]
                );
                return redirect('/cast');
 
    }

    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();
        return redirect('/cast');
    }
}

