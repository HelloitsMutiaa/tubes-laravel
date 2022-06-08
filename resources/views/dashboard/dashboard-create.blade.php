@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'dashboard')
@section('content')

<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Forum</span></h1>
    
        <fieldset class="box">
            <form action="{{ route('dashboard.create') }}" method="post"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ auth()->user()->id }}" name="user" id="user">
                <div class="form">
                    <input type="text" name="title" id="title" value="">
                    <label for="title">Judul Karya</label>
                </div> 
                <div class="form">
                    <label for="image"><a class="btn-upload" rel="nofollow">Karya</a></label>
                    <input type="file" id="image" name="image" multiple>
                </div>  
                <div class="desc">
                    <label for="description" style="font-size: 20px">Deskripsi</label>
                    <textarea name="description" id="description" value=""></textarea>
                    <script>
                        CKEDITOR.replace( 'description' );
                    </script>
                </div>
                <div align="center" style="margin-top: 250px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>     
        </fieldset>



</section>
    
@endsection