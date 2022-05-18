@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'returns')
@section('content')
    
<section class="home">
    <h1><span>Pengembalian</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>Buku</th>
                <th>Nama</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
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
                    <a href=""><button class="btn-primary" onclick="return confirm('Are You Sure ?');">Hapus</button></a>
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