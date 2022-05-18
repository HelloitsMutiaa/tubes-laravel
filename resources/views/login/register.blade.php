@extends('layouts.main')
@section('content')
<section class="sign">
    <form action="" method="POST">
   <h1><span>Registrasi</span></h1> 
   <fieldset class="reg">
    <div class="form">
        <input type="text" name="nama" required>
        <label for="">Nama</label>
    </div>    
    <div class="form">
        <input type="text" name="email" required>
        <label for="">Email</label>
    </div>  
    <div class="form">
        <input type="text" id="date" name="date" class="tgl" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" required>
        <label for="date">Tanggal Lahir</label>
    </div>  
    <div class="form">
        <select id="kategori" class="custom-select" name="kategori">
        <option value = "">{{ __('1') }}</option>
        <option value = "">{{ __('2') }}</option>
        <option value = "">{{ __('3') }}</option>
        <option value = "">{{ __('4') }}</option>
        <option value = "">{{ __('5') }}</option>
        <option value = "">{{ __('6') }}</option>
        </select> 
       <label for="kategori">{{ __('Kelas') }}</label>
    </div> 
    <div class="form">
       <input type="password" name="pass" id="pwd" required>
       <label for="">Password</label>
       <div class="input-group-append">
           <i class="fa fa-eye-slash" id="icon"></i>
       </div>
   </div>  
    <h3>Already Have an Account?<a href="login.php">Sign In</a></h3>
    <br/>
    <div class="add3">
        <a href="#"><button type="submit" name="submit" class="btn-secondary">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection