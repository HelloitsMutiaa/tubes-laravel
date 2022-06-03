@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'peminjaman')
@section('content')
<section class="home">
    <form  action="{{ route('addpinjam', $book->id) }}" method="post">
        @csrf
    <h1><span>Peminjaman</span></h1>
    <fieldset class="box">
        <input type="hidden" name="book" id="book" value="{{ $book->id }}">
        <input type="hidden" name="siswa" id="siswa" value="{{ Auth::user()->id }}">
        <div class="form">
           <input type="text" value="{{ $book->judul }}">
           <label for="book">Buku</label>
        </div>  
        <div class="form">
           <input type="text" value="{{ Auth::user()->name }}">
           <label for="nama">Nama</label>
        </div> 
        <input type="hidden" id="status" name="status" value="Proses"> 
     </div> 
     <div class="add2">
         <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
     </div>
     </fieldset> 
         </form>
</section>
@endsection