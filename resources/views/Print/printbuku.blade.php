@extends('layouts.print')
@include('sidebar')
@section('content')
    <section class="home">
    <h1><span>Data User</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Cover</th>
                <th>Halaman</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $book->judul }}</td>
                    <td><img src="/{{ $book->cover }}" alt=""></td>
                    <td>{{ $book->pengarang }}</td>
                    <td>{{ $book->halaman }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                    <td>{{ $book->categories->kategori }}</td>
                </tr>
                @endforeach
                </tbody>
        </table>

        <table class="table-ch">
                <tfoot>
                    <td><a href=""><button class="btn-secondary" id="print">Print</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
@endsection
@include('layouts.footer')
