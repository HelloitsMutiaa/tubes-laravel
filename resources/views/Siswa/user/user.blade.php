@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'Siswa')
@section('content')
    
<section class="home">
    <h1><span>Data User</span></h1>
    <fieldset class="boks">
        <h2 class="tape"><span>Profile</span></h2>
        <table class="table-us">
        <input type="hidden" name="id" value="{{ $user->id }}">
            <tr>
                <td>Nama</td>
                <td>:&nbsp;&nbsp;&nbsp;{{ $user->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:&nbsp;&nbsp;&nbsp;{{ $user->email }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:&nbsp;&nbsp;&nbsp;{{ $user->kelas }}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:&nbsp;&nbsp;&nbsp;{{ $user->tgl_lahir }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:&nbsp;&nbsp;&nbsp;{{ $user->level }}</td>
            </tr>
            <tfoot>
                <td><a href="{{ route('editsiswa', auth()->user()->id) }}"><button class="btn-secondary">Edit</button></a></td>
            </tfoot>
        </table>

    </fieldset>
</section>
    
@endsection