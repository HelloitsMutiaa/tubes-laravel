@extends('layouts.main')
@include('layouts.sidebar')
@section('content')
<section class="home">
    <form action="" method="POST" role="form">
        @csrf
   <h1><span>Print</span></h1> 
   <fieldset class="box"> 
<div class="form">
    <select id="status" class="custom-select" name="status">
    <option value = "1">{{ __('Data Siswa') }}</option>
    <option value = "2">{{ __('Data Buku') }}</option>
    </select> 
   <label for="status">{{ __('Pilihan Data') }}</label>
</div> 
    <div class="add3">
        <button id="print" type="submit" class="btn-secondary">Submit</button>
    </div>
    </fieldset> 
    </form>
</section>
@endsection