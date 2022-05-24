@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'user')
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

        <table class="table-ch">
                <tfoot>
                    <td><a href="{{ route('adduser') }}"><button class="btn-secondary">Tambah</button></a></td>
                </tfoot>
        </table>
        
        </div>
</section>
    
@endsection