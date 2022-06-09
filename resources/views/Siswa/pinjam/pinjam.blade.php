@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'peminjaman')
@section('content')
    
<section class="home">
    <h1><span>Peminjaman</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Status</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($pinjams as $index => $pinjam)
                @if($pinjam->status == 'Kembali')
                @else
                <tr>
                <td>{{ $index + $pinjams -> firstItem() }}</td>
                <td>{{ $pinjam->books->judul }}</td>
                <td>
                    @if ($pinjam->tgl_pinjam==null)
                      <h2>-</h2>  
                    @else
                       {{ $pinjam->tgl_pinjam }} 
                    @endif
                </td>
                <td>
                    @if ($pinjam->tgl_jtempo==null)
                      <h2>-</h2>
                    @else
                        {{ $pinjam->tgl_jtempo }}
                    @endif
                </td>
                <td>{{ $pinjam->status }}</td>
                <td>
                    @if ($pinjam->status == "Proses")
                    <form action="{{ route('deletepinjam', $pinjam->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn-primary" onclick="return confirm('Are You Sure ?');"><i class='bx bx-x bx-sm'></i></button>
                    </form> 
                    @elseif ($pinjam->status == "Tolak")
                    <form action="{{ route('deletepinjam', $pinjam->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn-primary" onclick="return confirm('Are You Sure ?');"><i class='bx bxs-trash bx-sm'></i></button>
                    </form>
                    @else
                    <a href="{{ route('addkembali', $pinjam->id) }}">
                    <button class="btn-primary"><i class='bx bxs-hand-right bx-sm'></i></button></a>
                    </form>    
                    @endif
                </td>
                </tr>
                @endif
                @endforeach 
                </tbody>
        </table>
        {{ $pinjams->links('vendor.pagination.custom') }}
        </div>
</section>
    
@endsection