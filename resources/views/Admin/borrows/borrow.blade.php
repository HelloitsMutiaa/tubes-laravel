@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'borrows')
@section('content')
    
<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Peminjaman</span></h1>
    <table class="choice"><tr>
    <td>
        <a href="{{ route('cetak-pinjam') }}" target="_blank"><button class="btn-choice"><i class='bx bxs-printer bx-sm'></i></button></a>
    </td>
    <td>
        <a href="{{ route('addborrow') }}"><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
    </td>
    <td>
    <div class="container">
            <form action="{{ route('borrows') }}" method="GET">
            <table class="elementscontainer">
                <tr>
                    <td>
                        <input type="text" placeholder="Cari" class="search" name="search">
                    </td>
                    <td>
                        <a href="#">
                            <button type="submit" class="btn-search" name="cari"><i class="bx bx-search bx-sm"></i></button>
                        </a>
                    </td>
                </tr>
            </table>
            </form>
        </div></td></tr></table>
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
                        <a href=""><button class="btn-primary"><i class='bx bx-check-double icon bx-sm'></i></button></a></form>
                        <form action="{{ route('rejectborrow', $borrow->id) }}" method="post">
                            @csrf
                        <a href=""><button class="btn-primary"><i class='bx bx-x bx-sm'></i></button></a></form>

                    @elseif ($borrow->status == 'Tolak')
                    <form action="{{ route('deleteborrow', $borrow->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <a href=""><button class="btn-primary" onclick="return confirm('Are You Sure ?');"><i class='bx bxs-trash bx-sm'></i></button></a></form>

                    @else
                    <a href="{{ route('addreturn', $borrow->id) }}"><button class="btn-primary"><i class='bx bxs-hand-right bx-sm'></i></button></a>
                    @endif
                </td>
                </tr> 
                @endif     
                @endforeach 
                </tbody>
        </table>
        {{ $borrows->links('vendor.pagination.custom') }}
        
        </div>
</section>
    
@endsection