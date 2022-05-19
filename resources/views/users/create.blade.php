@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'addUser')
@section('content')
<section class="home">
    <form action="" method="POST">
        @csrf
   <h1><span>Add User</span></h1> 
   <fieldset class="box">
    <div class="form">
        <input type="text" name="name" id="name">
        <label for="">Nama</label>
    </div>    
    <div class="form">
        <input type="text" name="email" id="email">
        <label for="">Email</label>
    </div>  
    <div class="form">
        <input type="text" id="tgl_lahir" name="tgl_lahir" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" required>
        <label for="tgl_lahir">Tanggal Lahir</label>
    </div>  
    <div class="form">
        <select id="kelas" class="custom-select" name="kelas">
        <option value = "">{{ __('1') }}</option>
        <option value = "">{{ __('2') }}</option>
        <option value = "">{{ __('3') }}</option>
        <option value = "">{{ __('4') }}</option>
        <option value = "">{{ __('5') }}</option>
        <option value = "">{{ __('6') }}</option>
        </select> 
       <label for="kelas">{{ __('Kelas') }}</label>
    </div> 
    <div class="form">
       <input type="password" name="password" id="password">
       <label for="">Password</label>
       <div class="input-group-append">
           <i class="fa fa-eye-slash" id="icon"></i>
       </div>
   </div>  
    <div class="add3">
        <a href=""><button type="submit" name="submit" class="btn-secondary">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection