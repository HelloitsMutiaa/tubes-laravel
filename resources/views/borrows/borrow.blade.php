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
                <th>Kelas</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Status</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($borrows as $index => $borrow)
                @if($borrow->status == 'Kembali')
                @else
                <tr>
                <td>{{ $index + $borrows -> firstItem() }}</td>
                <td>{{ $borrow->books->judul }}</td>
                <td>{{ $borrow->users->name }}</td>
                <td>{{ $borrow->users->kelas }}</td>
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
                        <form action="{{ route('rejectborrow', $borrow->id) }}" method="post">
                            @csrf
                        <a href=""><button class="btn-primary">Tolak</button></a></form>

                    @elseif ($borrow->status == 'Tolak')
                    <form action="{{ route('deleteborrow', $borrow->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <a href=""><button class="btn-primary" onclick="return confirm('Are You Sure ?');">Hapus</button></a></form>

                    @else
                    <a href="{{ route('addreturn', $borrow->id) }}"><button class="btn-primary">Kembali</button></a>
                    @endif
                </td>
                </tr> 
                @endif     
                @endforeach 
                </tbody>
        </table>
        {{ $borrows->links('vendor.pagination.custom') }}

        <table class="table-ch">
                <tfoot>
                    <td><a href="{{ route('addborrow') }}"><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection