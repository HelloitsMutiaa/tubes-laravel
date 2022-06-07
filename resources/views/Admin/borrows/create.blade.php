@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'addborrows')
@section('content')
<section class="home">
    <form  action="{{ route('addborrow') }}" method="post">
        @csrf
    <h1><span>Add Borrows</span></h1>
    <fieldset class="box">
        <div class="form">
            <select id="book" class="custom-select" name="book">
           @foreach ($books as $book)
            <option value = "{{ $book->id }}">{{ $book->judul }}</option>
            @endforeach
            </select> 
           <label for="book">Buku</label>
        </div>  
        <div class="form">
            <select id="nama" class="custom-select" name="nama">
           @foreach ($users as $user)
            <option value = "{{ $user->id }}">{{ $user->name }}({{ $user->kelas }})</option>
            @endforeach
            </select> 
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