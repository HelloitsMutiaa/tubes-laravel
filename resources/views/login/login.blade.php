@extends('layouts.main')
@section('content')
<section class="sign">
    <form action="" method="POST">
   <h1><span>Login</span></h1> 
   <fieldset class="reg">
    <div class="form">
        <input type="text" name="username" required>
        <label for="">Username</label>
    </div>     
    <div class="form">
       <input type="password" id="pwd" name="password" required>
       <label for="">Password</label>
       <div class="input-group-append">
           <i class="fa fa-eye-slash" id="icon"></i>
       </div>
   </div>  
    <h3>Don't Have an Account ?<a href="first-page.php">Sign Up</a></h3>
    <br/>
    <div class="add3">
        <a href="#"><button class="btn-secondary" name="submit">Submit</button></a> 
    </div>
    </fieldset> 
    </form>
</section>
@endsection