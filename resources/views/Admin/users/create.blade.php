@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'addUser')
@section('content')
<section class="home">
    <form action="{{ route('adduser') }}" method="post">
        @csrf
   <h1><span>Add User</span></h1> 
   <fieldset class="box">
    <div class="form">
        <input type="text" name="name" id="name">
        <label for="">Nama</label>
        @error('name')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
    </div>    
    <div class="form">
        <input type="email" name="email" id="email">
        <label for="">Email</label>
        @error('email')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
    </div>
    <div class="form">
       <input type="password" name="password" id="password">
       <label for="">Password</label>
       <div class="input-group-append">
           <i class="fa fa-eye-slash" id="icon"></i>
       </div>
       @error('password')
       <div class="text-danger">
        <h4>{{ $message }} </h4>   
       </div> 
    @enderror
   </div>  
   <div class="form">
    <input type="text" id="birthday" name="birthday" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
    <label for="birthday">Tanggal Lahir</label>
    @error('birthday')
    <div class="text-danger">
     <h4>{{ $message }} </h4>   
    </div> 
 @enderror
</div>  
<div class="form">
    <select id="class" class="custom-select" name="class">
    <option value = "1">{{ __('1') }}</option>
    <option value = "2">{{ __('2') }}</option>
    <option value = "3">{{ __('3') }}</option>
    <option value = "4">{{ __('4') }}</option>
    <option value = "5">{{ __('5') }}</option>
    <option value = "6">{{ __('6') }}</option>
    </select> 
   <label for="class">{{ __('Kelas') }}</label>
</div> 
<input type="hidden" value="siswa" name="level" id="level">
    <div class="add3">
        <a href=""><button type="submit" name="submit" class="btn-secondary">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection