<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Document</title>
</head>
<style>
    :root{
        --body-color:#E7DEC8;
        --sidebar-color:#7E8A97;
        --primary-color:#CBAF87;
        --toggle-color:#3A4F52;
        --text-color:#31485F;
    }
    body{
        background: var(--body-color);
    }
    nav{
        background: var(--body-color);
        color: var(--text-color);
        font-weight: bolder;
    }
    .up{
        position: absolute;
        list-style: none;
        display: flex;
        right: 5%;
    }
    .up a{
        color: var(--text-color);
        text-decoration: none;
        font-size: 20px;
    }
    .back{
        position: relative;
        background: var(--toggle-color);
        margin-top: 30px;
        height: 600px;
        width: 600px;
        margin: auto;
        border-radius: 50%;
    }
    .book{
        position: absolute;
        width: 600px;
        height: 500px;
    }
    .card {
        border: none;
        outline: none;
        height: 600px;
        background: var(--body-color);
        color:var(--text-color);
    }
    .btn-ku{
        background: var(--text-color);
        margin-top: 100px;
        border-radius: 6px;
        text-decoration: none;
        color: #E7DEC8;
    }
</style>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg">
    <p class="navbar-brand">
      <img src="{{ asset('images/logo.png') }}" width="50" height="50" class="d-inline-block align-top ml-5">
    </p>
    <ul class="up">
      @if (Route::has('login'))
      @auth
      <li><a href="{{ route('dashboard') }}">Dashboard&nbsp;&nbsp;</a></li>
      @else
      <li><a href="{{ route('login') }}">Login&nbsp;&nbsp;</a></li>
      <li><a href="{{ route('register') }}">&nbsp;&nbsp;Register</a></li>
      @endauth
      @endif
    </ul>
  </nav>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          @if (Route::has('login'))
          @auth
          <h2 class="card-title mt-5 ml-5">Welcome Back {{ Auth::user()->name }}</h2>
          @else
          <h2 class="card-title mt-5 ml-5">Join Perpuskuy</h2>
          @endauth
          @endif
          <h6 class="card-text my-md-5 ml-5">The more that you READ, the more things you will KNOW. 
              The more that you LEARN, the more places you will GO.
          </h6>
          @if (Route::has('login'))
          @auth
          <a href="{{ route('dashboard') }}" class="btn btn-ku ml-5">Start Again</a>
          @else
          <a href="{{ route('register') }}" class="btn btn-ku ml-5">Get Started</a>
          @endauth
          @endif
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <div class="back">
            <img class="book" src="{{ asset('images/book.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>