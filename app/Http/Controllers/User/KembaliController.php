<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use DateTime;
use App\Models\Kembali;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Siswa.kembali.kembali');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $kembali = date('Y-m-d', strtotime(date('Y-m-d')));
        $pinjam = Borrow::findorFail($id);
        $jtempo = $pinjam->tgl_jtempo;
        $k = new DateTime($kembali);
        $j = new DateTime($jtempo);
        $selisih = $k->diff($j);
        $days = $selisih->format('%a');

        if($k > $j){
            $denda = 500 * $days;
        } else{
            $denda = 0;
        }

        return view('Siswa.kembali.create', [
            'kembali' => $kembali,
            'pinjam' => $pinjam,
            'denda' => $denda
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $kembali = new Kembali();
        $kembali->pinjam_id = $request->pinjam;
        $kembali->tgl_kembali = $request->kembali;
        $kembali->denda = $request->denda;
        $kembali->status = $request->status;
        $kembali->save();

        $borrow = Borrow::find($id)->update([
            'status' => 'Kembali',
        ]);

        return redirect()->route('returns');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}