@extends('template_backend.home')
@section('sub-judul', 'Edit Kategori')
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

<form action="{{ route('category.update', $category -> id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="name" value="{{ $category -> name}}">
    </div>

    <div class=" form-group">
        <button class="btn btn-primary">Update Kategori</button>
    </div>

</form>



@endsection