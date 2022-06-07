<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Image;
use App\Models\Book;
use App\Traits\ImageUpload;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $books = Book::join('categories', 'books.kategori_id', '=', 'categories.id')
            ->where('judul', 'LIKE', '%'.$request->search.'%')
            ->orWhere('categories.kategori', 'LIKE', '%'.$request->search.'%')
            ->orWhere('pengarang', 'LIKE', '%'.$request->search.'%')
            ->orderBy('judul', 'ASC')
            ->paginate(5); 
        }else{
        $books = Book::orderBy('judul', 'ASC')
        ->paginate(5);
        }
        return view('books.book', ['books' => $books]);
    }

    public function printbuku()
    {
        $no = 1;
        $books = Book::all();
        return view('books.print', ['books' => $books, 'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('books.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    use ImageUpload;
    public function store(Request $request)
    {
        $request->validate([
            'judul'      => ['required', 'string', 'max:255', 'unique:books'],
            'cover'     => ['required', 'image', 'mimes:jpeg,png,jpg'],
            'pengarang'  => ['required'],
            'halaman' => ['required'],
            'terbit'     => ['required'],
        ]);

        $book = new Book;
        $book->judul = $request->judul;
        $book->cover = $request->cover;
        if($book->cover){
            $filepath = $this->AdminImageUpload($book->cover);
            $book->cover = $filepath;
        }
        $book->pengarang = $request->pengarang;
        $book->halaman = $request->halaman;
        $book->tahun_terbit = $request->terbit;
        $book->kategori_id = $request->kategori;
        $book->save();

        return redirect()->route('books');
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
        $book = Book::findOrFail($id);

        return view('books.edit', [
            'book' => $book 
        ]);
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
        $book = Book::find($id)->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'halaman' => $request->halaman,
            'tahun_terbit' => $request->terbit,
        ]);
        return redirect()->route('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books');
    }
}
