<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $borrows = Borrow::paginate(5);
        return view('borrows.borrow', ['borrows'=>$borrows, 'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $users = User::where('level', 'siswa')->get();
        return view('borrows.create', ['books'=>$books, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $borrow = new Borrow;
        $borrow->book_id = $request->book;
        $borrow->user_id = $request->nama;
        $borrow->tgl_pinjam = null;
        $borrow->tgl_jtempo = null;
        $borrow->status = $request->status;
        $borrow->save();

        return redirect()->route('borrows');
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
        $borrow = Borrow::find($id)->update([
            'tgl_pinjam' => date('Y-m-d', strtotime(date('Y-m-d'))),
            'tgl_jtempo' => date('Y-m-d',strtotime('+7 days',strtotime(date('Y-m-d')))),
            'status' => 'Berhasil',
        ]);

        return redirect()->route('borrows');
    }

    public function reject($id)
    {
        $borrow = Borrow::find($id)->update([
            'status' => 'Tolak',
        ]);

        return redirect()->route('borrows');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrow = Borrow::find($id);
        $borrow->delete();
        return redirect()->route('borrows');
    }
}
