@extends('template_backend.home')
@section('sub-judul', 'Pengguna')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session('success')}}
</div>
@endif

<a href="{{ route('user.create') }}" class="btn btn-info btn-sm mb-3">Tambah User</a>
<table class=" table table-striped table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Email</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($user as $result => $hasil) <tr>
            <td>{{ $result + $user-> firstitem()}}</td>
            <td>{{ $hasil -> name}}</td>
            <td>{{ $hasil -> email}}</td>
            <td>@if($hasil->level)
                <span class="badge badge-info">Administrator</span>
                @else
                <span class="badge badge-warning">Penulis</span>
                @endif
            </td>
            <td>
                <form action="{{ route('user.destroy', $hasil->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('user.edit', $hasil -> id)}}" class=" btn btn-primary btn-sm">Edit</a>
                    <button type="submit" a href="" class="btn btn-danger btn-sm">Hapus </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$user->links()}}
@endsection