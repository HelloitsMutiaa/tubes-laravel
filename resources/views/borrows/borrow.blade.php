@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'borrows')
@section('content')
    
<section class="home">
    <h1><span>Peminjaman</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>Buku</th>
                <th>Nama</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Status</th>
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
                <td></td>
                <td>
                    <a href=""><button class="btn-primary">Kembali</button></a>
                    <a href=""><button class="btn-primary">Pinjam</button></a>
                </td>
                </tr>
                </tbody>
        </table>

        <table class="table-ch">
                <tfoot>
                    <td><a href=""><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection