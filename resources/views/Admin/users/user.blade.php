@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'user')
@section('content')
    
<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Data User</span></h1>
    <table class="choice"><tr>
        <td>
            <a href="{{ route('cetak-siswa') }}" target="_blank"><button class="btn-choice"><i class='bx bxs-printer bx-sm'></i></button></a>
        </td>
        <td>
            <a href="{{ route('adduser') }}"><button class="btn-choice"><i class='bx bxs-file-plus bx-sm'></i></button></a>
        </td>
        <td>
        <div class="container">
                <form action="{{ route('user') }}" method="GET">
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
            </div></td></tr></table>
    <table class="content-table">
            <thead>
                <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                <tr>
                <td>{{ $index + $users->firstItem() }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tgl_lahir }}</td>
                <td>{{ $user->kelas }}</td>
                <td>
                    <a href="{{ route('edituser', $user->id) }}"><button class="btn-primary">Edit</button></a>
                    <form action="{{ route('deleteuser', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                    <button class="btn-primary" onclick="return confirm('Are You Sure ?');">Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
        </table>
        {{ $users->links('vendor.pagination.custom') }}
        </div>
</section>
    
@endsection