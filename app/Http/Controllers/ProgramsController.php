<?php

namespace App\Http\Controllers;

use App\Models\Edulevel;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $programs = Program::with('Edulevel')->get();
        $program = Program::all();
        return view('program.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edulevel = Edulevel::all();
        return view('program.create', compact('edulevel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nama' => 'required',
            'edulevel_id' => 'required',
            'studen_price' => 'required',
            'student_max' => 'required',
            'info' => 'required'
        ]);

        Program::create([
            'nama' => $request->nama,
            'edulevel_id' => $request->edulevel_id,
            'studen_price' => $request->studen_price,
            'student_max' => $request->student_max,
            'info' => $request->info
        ]);
        return redirect(url('/Programs'))->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        // dd($program);
        return view('program.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $edulevel = Edulevel::all();
        return view('program.edit', compact('program', 'edulevel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {

        $request->validate([
            'nama' => 'required',
            'edulevel_id' => 'required',
            'studen_price' => 'required',
            'student_max' => 'required',
            'info' => 'required'
        ]);

        Program::where('id', $program->id)
            ->update([
                'nama' => $request->nama,
                'edulevel_id' => $request->edulevel_id,
                'studen_price' => $request->studen_price,
                'student_max' => $request->student_max,
                'info' => $request->info
            ]);

        return redirect(url('/Programs'))->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy($program->id);
        return redirect(url('/Programs'))->with('status', 'Data Berhasil Dihapus');
    }
}