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
                <th>Cover</th>
                <th>Pengarang</th>
                <th>Halaman</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($books as $index => $book)
                <tr>
                <td>{{ $index + $books -> firstItem() }}</td>
                <td>{{ $book->judul }}</td>
                <td><img src="/{{ $book->cover }}" alt=""></td>
                <td>{{ $book->pengarang }}</td>
                <td>{{ $book->halaman }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->categories->kategori }}</td>
                <td>
                    @if (auth()->user()->level=="admin")
                    <a href="{{ route('editbook', $book->id) }}"><button class="btn-primary">Edit</button></a>
                    <form action="{{ route('deletebook', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn-primary" onclick="return confirm('Are You Sure ?');">Delete</button>
                    </form> 
                    @else
                    <a href="{{ route('editbook', $book->id) }}"><button class="btn-primary">Pinjam</button></a> 
                    @endif
                </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $books->links('vendor.pagination.custom') }}
        <table class="table-ch">
                <tfoot>
                    <td><a href="{{ route('addbook') }}"><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection