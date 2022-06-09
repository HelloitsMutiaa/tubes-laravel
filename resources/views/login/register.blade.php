@extends('layouts.main')
@section('title', 'register')
@section('content')
<section class="sign">
   <h1><span>Daftar</span></h1> 
   <fieldset class="reg">
    <form action="{{ route('register') }}" method="post">
        @csrf
    <div class="form">
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <label for="name">Nama</label>
        @error('name')
           <div class="text-danger">
            <h4>{{ $message }} </h4>   
           </div> 
        @enderror
    </div>    
    <div class="form">
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')
           <div class="text-danger">
            <h4>{{ $message }} </h4>   
           </div> 
        @enderror
    </div>
    <div class="form">
       <input type="password" name="password" id="password">
       <label for="password">Password</label>
       @error('password')
           <div class="text-danger">
            <h4>{{ $message }} </h4>   
           </div> 
        @enderror
   </div>  
     
   <div class="form">
    <input type="text" id="birthday" name="birthday" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
    <label for="birthday">Birthday</label>
    @error('birthday')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
</div>  
<div class="form">
    <input type="text" name="class" id="class" placeholder="1 - 6">
    <label for="class">Kelas</label>
    @error('class')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
</div>  
   <input type="hidden" value="siswa" name="level" id="level">
    <h3>Sudah Memiliki Akun?<a href="{{ route('login') }}">Masuk</a></h3>
    <br/>
    <div class="add3">
        <button class="btn-secondary" type="submit">Submit</button>
    </div>
</form>
    </fieldset> 
</section>
@endsection