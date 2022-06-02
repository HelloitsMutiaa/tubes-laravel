@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'returns')
@section('content')
    
<section class="home">
    <h1><span>Pengembalian</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Buku</th>
                <th>Nama</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kembalis as $index => $kembali)  
                <tr>
                <td>{{ $index + $kembalis -> firstItem() }}</td>
                <td>{{ $kembali->borrows->books->judul }}</td>
                <td>{{ $kembali->borrows->users->name }}</td>
                <td>{{ $kembali->borrows->tgl_jtempo }}</td>
                <td>{{ $kembali->tgl_kembali }}</td>
                <td>{{ $kembali->denda }}</td>
                <td>
                    @if ($kembali->status == 'Proses')
                        <form action="{{ route('updatereturn', $kembali->id) }}" method="post">
                            @csrf
                        <a href=""><button class="btn-primary">Konfirmasi</button></a></form>
                    @else
                    <form action="{{ route('deletereturn', $kembali->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <a href=""><button class="btn-primary" onclick="return confirm('Are You Sure ?');">Hapus</button></a></form>
                    @endif
                </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $kembalis->links('vendor.pagination.custom') }}
        </div>
</section>
    
@endsection