@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'books')
@section('content')
    
<section class="home">
    <h1><span>Data User</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href=""><button class="btn-primary">Edit</button></a>
                    <a href=""><button class="btn-primary" onclick="return confirm('Are You Sure ?');">Hapus</button></a>
                </td>
                </tr>
                </tbody>
        </table>

        <table class="table-ch">
                <tfoot>
                    <td><a href="{{ route('adduser') }}"><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection