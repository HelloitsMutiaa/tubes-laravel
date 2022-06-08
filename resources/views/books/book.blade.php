@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'books')
@section('content')
    
<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Data Buku</span></h1>
    <table class="choice">
        <tr>
            @if(auth()->user()->level=="admin")
        <td>
            <a href="{{ route('cetak-buku') }}" target="_blank"><button class="btn-choice"><i class='bx bxs-printer bx-sm'></i></button></a>
        </td>
        <td>
            <a href="{{ route('addbook') }}"><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
        </td>
        <td>
            <div class="container">
                    <form action="{{ route('books') }}" method="GET">
                    <table class="elementscontainer">
                        <tr>
                            <td>
                                <input type="text" placeholder="Search" class="search" name="search">
                            </td>
                            <td>
                                <a href="#">
                                    <button type="submit" class="btn-search" name="cari"><i class="bx bx-search bx-sm"></i></button>
                                </a>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div></td>
        @else
        <td>
        <div class="container">
                <form action="{{ route('books') }}" method="GET">
                <table class="elementscontainer">
                    <tr>
                        <td>
                            <input type="text" placeholder="Search" class="search" name="search">
                        </td>
                        <td>
                            <a href="#">
                                <button type="submit" class="btn-search" name="cari"><i class="bx bx-search bx-sm"></i></button>
                            </a>
                        </td>
                    </tr>
                </table>
                </form>
            </div></td>@endif</tr></table>
            <div class="show">
                <small><b>Showing {{ $books->count() }} from {{ $books->total() }} Data<b></small>
            </div>
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
                    <a href="{{ route('addpinjam', $book->id) }}"><button class="btn-primary">Pinjam</button></a> 
                    @endif
                </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $books->links('vendor.pagination.custom') }}
        </div>
</section>
    
@endsection