<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashbroad.harian',[
            "title"=>'harian'
        ]);
    }
    public function indexSenin()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Monday'
        ]);
    }
    public function indexSelasa()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Tuesday'
        ]);
    }
    public function indexRabu()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Wednesday'
        ]);
    }
    public function indexKamis()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Thursday'
        ]);
    }

    public function indexJumat()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Friday'
        ]);
    }

    public function indexSabtu()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Saturday'
        ]);
    }

    public function indexMinggu()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'Sunday'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $DataKegiatan = $request -> validate([
        //     'tugas'=> 'required|max:255'
        // ]);
        // dd($request->all());
        // $DataKegiatan['user_id'] = auth()->id();
        // // $DataKegiatan['hari'] = 'rabu';

        // DB::table('tugas')->insert($DataKegiatan);
        // return $DataKegiatan;
        // // return back()->with('success', 'Keren Semua Data berhasil diinputkan!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tugas $tugas)
    {
        //
    }
}
