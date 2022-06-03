@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'pengembalian')
@section('content')
    
<section class="home">
    <h1><span>Pengembalian</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Buku</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kembalis as $index => $kembali)  
                <tr>
                <td>{{ $index + $kembalis -> firstItem() }}</td>
                <td>{{ $kembali->borrows->books->judul }}</td>
                <td>{{ $kembali->borrows->tgl_jtempo }}</td>
                <td>{{ $kembali->tgl_kembali }}</td>
                <td>{{ $kembali->denda }}</td>
                <td>{{ $kembali->status }}</td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $kembalis->links('vendor.pagination.custom') }}
        </div>
</section>
    
@endsection