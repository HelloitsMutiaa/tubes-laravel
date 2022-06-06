@extends('layouts.print')
@section('content')
    <section class="home">
    <h1><span>Data User</span></h1>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                <td>{{ $no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tgl_lahir }}</td>
                <td>{{ $user->kelas }}</td>
                </tr>
                @endforeach
                </tbody>
        </table>

        <table class="table-ch">
                <tfoot>
                    <td><a href=""><button class="btn-secondary" id="cetak">Print</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
@endsection
