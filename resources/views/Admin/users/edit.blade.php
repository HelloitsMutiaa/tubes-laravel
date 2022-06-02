@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'updateUser')
@section('content')
<section class="home">
    <form action="{{ route('updateuser', $user->id) }}" method="post">
        @csrf
   <h1><span>Edit User</span></h1> 
   <fieldset class="box">
    <div class="form">
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <label for="">Nama</label>
        @error('name')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
    </div>    
    <div class="form">
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <label for="">Email</label>
        @error('email')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
    </div> 
   <div class="form">
    <input type="text" id="birthday" name="birthday" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" value="{{ $user->tgl_lahir }}">
    <label for="birthday">Tanggal Lahir</label>
    @error('birthday')
    <div class="text-danger">
     <h4>{{ $message }} </h4>   
    </div> 
 @enderror
</div>  
<div class="form">
    <input type="text" name="class" id="class" placeholder="1 - 6" value="{{ $user->kelas }}">
    <label for="class">Class</label>
    @error('birthday')
        <div class="text-danger">
         <h4>{{ $message }} </h4>   
        </div> 
     @enderror
</div>  
    <div class="add3">
        <a href=""><button type="submit" name="submit" class="btn-secondary">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection