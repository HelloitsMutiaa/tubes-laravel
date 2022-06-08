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
            <a href=""><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
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
    
        <fieldset class="box">
        <div class="form">
         <input type="text" name="judul_karya" id="judul_karya" value="">
         <label for="judul_karya">Judul Karya</label>
        </div> 
        <div class="form">
            <label for="karya"><a class="btn-upload" rel="nofollow">Karya</a></label>
            <input type="file" id="karya" name="karya" multiple>
        </div>  
        <div class="form">
         <input type="text" name="deskripsi" id="deskripsi" value="">
         <label for="deskripsi">Deskripsi</label>
        </div> 
        </fieldset>



</section>
    
@endsection