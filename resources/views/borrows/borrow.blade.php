@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'borrows')
@section('content')
    
<section class="home">
    <h1><span>Peminjaman</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Buku</th>
                <th>Nama</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Status</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($borrows as $borrow)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $borrow->books->judul }}</td>
                <td>{{ $borrow->users->name }}</td>
                <td>
                @if ($borrow->tgl_pinjam == null)
                    <h2>-</h2>
                @else
                    {{ $borrow->tgl_pinjam }}
                @endif</td>
                <td>
                    @if ($borrow->tgl_jtempo == null)
                        <h2>-</h2>
                    @else
                        {{ $borrow->tgl_jtempo }}
                    @endif</td>
                <td>{{ $borrow->status }}</td>
                <td>
                    @if ($borrow->status == 'Proses')
                        <form action="{{ route('updateborrow', $borrow->id) }}" method="post">
                            @csrf
                        <a href=""><button class="btn-primary">Konfirmasi</button></a></form>
                    @else
                    <a href=""><button class="btn-primary">Kembali</button></a>
                    @endif
                </td>
                </tr>      
                @endforeach 
                </tbody>
        </table>

        <table class="table-ch">
                <tfoot>
                    <td><a href="{{ route('addborrow') }}"><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection