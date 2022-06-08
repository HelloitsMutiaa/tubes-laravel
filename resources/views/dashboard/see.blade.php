@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'dashboard')
@section('content')

<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Forum</span></h1>
    <table class="choice">
        <tr>
            <td><p>Upload Karyamu</p></td>
        <td>
            <a href="{{route('dashboard.create')}}"><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
        </td>
        <td>
        <div class="container">
                <form action="" method="GET">
                <table class="elementscontainer">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search" name="search">
                        </td>
                        <td>
                            <a href="#">
                                <button type="submit" class="btn-search" name="cari"><i class="bx bx-search bx-sm"></i></button>
                            </a>
                        </td>
                    </tr>
                </table>
                </form>
        </div></td></tr></table>
    
      

        <div class="images">
            @foreach($posts as $post)
        <div class="image-box">   
            <h2><b>{{$post->user->name}}</b></h2>
            {{-- <h2><b>Putrija Malau</b></h2> --}}
            <h5>{{ $post->created_at->diffForHumans() }}</h5>
            <img src="/{{$post->image}}" alt="">
            <h3>{{ $post->title }}</h3>
            <div align="center">
                <a href="{{ route('dashboard.edit', $post->id) }}"><button class="btn-primary">Edit</button></a>
                <form action="{{ route('dashboard.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn-primary" onclick="return confirm('Are You Sure ?');">Delete</button>
                </form> 
            </div>
        </div>
        @endforeach
            </div>
                    

        



</section>
    
@endsection