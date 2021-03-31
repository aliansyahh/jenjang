<?php

namespace App\Http\Controllers;

use App\Models\Edulevel;
use Illuminate\Http\Request;

class EdulevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edulevel = Edulevel::all();
        return view('edulevel.index', compact('edulevel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edulevel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'desc' => 'required'
            ],
            [
                'nama.required' => ':Attribute Harus Diisi.',
                'desc.required' => ':Attribute Harus Diisi.'

            ]
        );

        Edulevel::create($request->all());
        return redirect(url('/Edulevels'))->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edulevel  $edulevel
     * @return \Illuminate\Http\Response
     */
    public function show(Edulevel $edulevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edulevel  $edulevel
     * @return \Illuminate\Http\Response
     */
    public function edit(Edulevel $edulevel)
    {
        return view('edulevel.edit', compact('edulevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edulevel  $edulevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edulevel $edulevel)
    {
        $request->validate(
            [
                'nama' => 'required',
                'desc' => 'required'
            ],
            [
                'nama.required' => ':Attribute Harus Diisi.',
                'desc.required' => ':Attribute Harus Diisi.'

            ]
        );

        Edulevel::where(['id' => $edulevel->id])->update([
            'nama' => $request->nama,
            'desc' => $request->desc
        ]);
        return redirect(url('Edulevels'))->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edulevel  $edulevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edulevel $edulevel)
    {
        Edulevel::destroy($edulevel->id);

        return redirect(url('Edulevels'))->with('status', 'Data Berhasil Dihapus');
    }
}