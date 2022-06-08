@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'dashboard')
@section('content')

<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Forum</span></h1>
    
        <fieldset class="box">
            <form action="{{ route('dashboard.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form">
                    <input type="text" name="title" id="title" value="{{ $post->title }}">
                    <label for="title">Judul Karya</label>
                </div> 
                <div class="form">
                    <input type="text" name="description" id="description" value="{{ $post->description }}">
                    <label for="description">Deskripsi</label>
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>     
        </fieldset>



</section>
    
@endsection