@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'pengembalian')
@section('content')
<section class="home">
    <form  action="{{ route('addkembali', $pinjam->id) }}" method="post">
        @csrf
    <h1><span>Add Returns</span></h1>
    <fieldset class="box">
        <input type="hidden" name="pinjam" id="pinjam" value="{{ $pinjam->id }}">
        <div class="form"> 
            <input type="text" name="judul" id="judul" value="{{ $pinjam->books->judul}}">
            <label for="judul">Judul</label>
       @error('judul')
            <div class="text-danger">
             <h4>{{ $message }} </h4>   
            </div> 
         @enderror
        </div>  
        <div class="form">
            <input type="text" name="nama" id="nama" value="{{ Auth::user()->name}}">
            <label for="nama">Nama</label>
       @error('nama')
            <div class="text-danger">
             <h4>{{ $message }} </h4>   
            </div> 
         @enderror
        </div>  
        <div class="form">
            <input type="text" id="jtempo" name="jtempo" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" value="{{ $pinjam->tgl_jtempo }}">
            <label for="jtempo">Tanggal Jatuh Tempo</label>
        @error('jtempo')
           <div class="text-danger">
            <h4>{{ $message }} </h4>   
           </div> 
        @enderror
        </div>  
        <div class="form">
            <input type="text" id="kembali" name="kembali" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" value="{{ $kembali }}">
            <label for="kembali">Tanggal Kembali</label>
        @error('kembali')
           <div class="text-danger">
            <h4>{{ $message }} </h4>   
           </div> 
        @enderror
        </div>  
        <div class="form">
            <input type="text" name="denda" id="denda" value="{{ $denda }}">
            <label for="Denda" disabled>Denda</label>
       @error('denda')
            <div class="text-danger">
             <h4>{{ $message }} </h4>   
            </div> 
         @enderror
        </div>  
        <input type="hidden" name="status" id="status" value="Proses">
     <div class="add2">
         <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
     </div>
     </fieldset> 
         </form>
</section>
@endsection