@extends('layouts.main')
@section('title', 'login')
@section('content')
<section class="sign">
    <form action="{{ route('login') }}" method="post">
        @csrf
   <h1><span>Masuk</span></h1> 
   <fieldset class="reg">
    <div class="form">
        <input type="text" name="email" id="email">
        <label for="">Email</label>
    </div>     
    <div class="form">
       <input type="password" id="password" name="password">
       <label for="">Password</label>
       <div class="input-group-append">
           <i class="fa fa-eye-slash" id="icon"></i>
       </div>
   </div>  
    <h3>Belum Memiliki Akun ?<a href="{{ route('register') }}">Daftar</a></h3>
    <br/>
    <div class="add3">
        <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection