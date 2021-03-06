@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'dashboard')
@section('content')

<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Forum</span></h1>
    <table class="choice">
        <tr>
            <td>
                <button class="btn-secondary"><h6>Total Siswa: {{ $user->count() }}</h6></button>
            </td>
            <td>
                <button class="btn-secondary"><h6>Peminjaman: {{ $pinjam->count() }}</h6></button>
            </td>
        <td>
            <button class="btn-secondary"><h6>Total Karya: {{ $posts->count() }}</h6></button>
        </td>
        <td>
            <a href="{{route('dashboard.create')}}"><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
        </td>
        <td>
        <div class="container">
                <form action="" method="GET">
                <table class="elementscontainer">
                    <tr>
                        <td>
                            <input type="text" placeholder="Cari" class="search" name="search">
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
            <h4><b>{{$post->user->name}}</b></h4>
            {{-- <h2><b>Putrija Malau</b></h2> --}}
            <a href="{{ route('seepost', $post->id) }}"><img src="/{{$post->image}}" alt=""></a>
            <a href="{{ route('seepost', $post->id) }}" style="text-decoration: none; color: #31485f;"><h4>{{ $post->title }}</h4></a>
        </div>
        @endforeach
            </div>
                    

        



</section>
    
@endsection