<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals = Soal::all();
        return view('soals.index', compact('soals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required',
        ]);

        $soals = new Soal;
        $soals->nama_mk = $request->nama_mk;
        $soals->dosen = $request->dosen;
        $soals->jumlah_soal = $request->jumlah_soal;
        $soals->keterangan = $request->keterangan;


        if ($soals) {
            $soals->save();
            return redirect()
                ->route('soal.index')
                ->with([
                    'success' => 'Data berhasil ditambahkan'
                ]);
        } else{}



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
        // return view('soals.edit')->with([
        //     'soal' => Soal::find($id),
        // ]);

        $soals = Soal::findOrFail($id);
        return view('soals.edit', compact('soals'));

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
        $this->validate($request, [
            'nama_mk' => 'required',
            'dosen' => 'required',
            'jumlah_soal' => 'required',
            'keterangan' => 'required',
        ]);

        $soals = Soal::findOrFail($id);

        $soals->update([
            'nama_mk' => $request->nama_mk,
            'dosen' => $request->dosen,
            'jumlah_soal' => $request->jumlah_soal,
            'keterangan' => $request->keterangan,
        ]);

        if ($soals) {
            return redirect()
                ->route('soal.index')
                ->with([
                    'success' => 'Data berhasil diubah'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Ada masalah, Mohon diulangi'
                ]);
        }

        // return to_route('soal.index')->with('Success', 'Data Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soals = Soal::find($id);
        $soals->delete();

        // return back()->with('Success', 'Data Berhasil Di Hapus!');
        return redirect()
        ->route('soal.index')
        ->with([
            'success' => 'Data berhasil dihapus!!!'
        ]);
    }
}
