@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'editbook')
@section('content')
    <section class="home">
    <form  action="{{ route('updatebook', $book->id) }}" method="post" enctype="multipart/form-data">
        @csrf
    <h1><span>Edit Book</span></h1>
    <fieldset class="box">
     <div class="form">
         <input type="text" name="judul" id="judul" value="{{ $book->judul }}">
         <label for="judul">Judul</label>
    @error('judul')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
     </div> 
     <div class="form">
         <input type="text" name="pengarang" id="pengarang" value="{{ $book->pengarang }}">
         <label for="pengarang">Pengarang</label>
    @error('pengarang')
         <div class="text-danger">
          <h4>{{ $message }} </h4>   
         </div> 
      @enderror
     </div>  
     <div class="form">
        <input type="text" name="halaman" id="halaman" value="{{ $book->halaman }}">
        <label for="halaman">Halaman</label>
    @error('halaman')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
    </div>  
    <div class="form">
        <input type="text" id="terbit" name="terbit" value="{{ $book->tahun_terbit }}" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
        <label for="terbit">Tahun Terbit</label>
    @error('terbit')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
    </div>    
     <br/>
     <div class="add2">
         <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
     </div>
     </fieldset> 
         </form>
</section>
@endsection