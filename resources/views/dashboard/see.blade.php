@extends('layouts.main')
@include('layouts.sidebar')
@section('title', 'dashboard')
@section('content')

<section class="home">
    <h1 style="margin-bottom: 0px;"><span>Forum</span></h1>
    <div class="post">
        <br><br>
            <h2><b>{{ $post->title }}</b></h2>
            {{-- <h2><b>Putrija Malau</b></h2> --}}
            <img src="/{{$post->image}}" alt="" class="post">
            <br>
            <br>
            <p>{!! $post->description !!}</p>
            <br>
            <small><span>Created By: {{ $post->user->name }}</span></small><br>
            <small><span>{{ $post->created_at->diffForHumans() }}</span></small>
            <br>
            <br>
            <br>
            @if($post->user->id==auth()->user()->id)
            <table class="table-ch">
                <tfoot>
                <td>
                <a href="{{ route('dashboard.edit', $post->id) }}"><button class="btn-secondary"><i class='bx bxs-edit-alt bx-sm'></i></button></a></td>
                <td><form action="{{ route('dashboard.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                <button class="btn-secondary" onclick="return confirm('Are You Sure ?');"><i class='bx bxs-trash bx-sm'></i></button>
                </form> </td></tfoot>
            </table>
            @endif
    </div>
</section>
    
@endsection