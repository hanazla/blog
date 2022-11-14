@extends('template_backend.home')
@section('sub-judul', 'Tambah Kategori')
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

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class=" form-group">
        <button class="btn btn-primary">Tambah Kategori</button>
    </div>

</form>



@endsection