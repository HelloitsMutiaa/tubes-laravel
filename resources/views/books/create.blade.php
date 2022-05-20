@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'addbook')
@section('content')
<section class="home">
    <form  action="{{ route('addbook') }}" method="post" enctype="multipart/form-data">
        @csrf
    <h1><span>Add Book</span></h1>
    <fieldset class="box">
     <div class="form">
         <input type="text" name="judul" id="judul">
         <label for="judul">Judul</label>
    @error('judul')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
     </div> 
     <div class="form">
        <label for="cover"><a class="btn-upload" rel="nofollow">Cover</a></label>
        <input type="file" id="cover" name="cover" multiple>
    </div>  
     <div class="form">
         <input type="text" name="pengarang" id="pengarang">
         <label for="pengarang">Pengarang</label>
    @error('pengarang')
         <div class="text-danger">
          <h4>{{ $message }} </h4>   
         </div> 
      @enderror
     </div>  
     <div class="form">
        <input type="text" name="halaman" id="halaman">
        <label for="halaman">Halaman</label>
    @error('halaman')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
    </div>  
    <div class="form">
        <input type="text" id="terbit" name="terbit" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
        <label for="terbit">Tahun Terbit</label>
    @error('terbit')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
    </div>  
     <div class="form">
         <select id="kategori" class="custom-select" name="kategori">
        @foreach ($categories as $cat)
         <option value = "{{ $cat->id }}">{{ $cat->kategori }}</option>
         @endforeach
         </select> 
        <label for="kategori">Kategori</label>
     </div>  
     <br/>
     <div class="add2">
         <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
     </div>
     </fieldset> 
         </form>
</section>
@endsection