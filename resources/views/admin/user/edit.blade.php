@extends('template_backend.home')
@section('sub-judul', 'Tambah Pengguna')
@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session('success')}}
</div>
@endif

<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label>Nama Pengguna</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" readonly>
    </div>
    <div class="form-group">
        <label>Level Pengguna</label>
        <select class="form-control" name="level">
            <option value="" holder>Pilih level pengguna</option>
            <option value="1" @if($user->level == 1)
                selected
                @endif>Administrator</option>
            <option value="0" @if($user->level == 0)
                selected
                @endif>Penulis</option>

        </select>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class=" form-group">
        <button class="btn btn-primary">Update Pengguna</button>
    </div>

</form>



@endsection