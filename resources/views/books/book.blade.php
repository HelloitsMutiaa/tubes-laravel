@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'books')
@section('content')
    
<section class="home">
    <h1><span>Data Buku</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Cover</th>
                <th>Halaman</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                <td>hahahah</td>
                <td></td>
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
                    <td><a href=""><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection