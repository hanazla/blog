@extends('template_backend.home')
@section('sub-judul', 'Tambah Tag')
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

<form action="{{ route('tag.update', $tag -> id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control" name="name" value="{{$tag -> name}}">
    </div>

    <div class=" form-group">
        <button class="btn btn-primary">Update Tag</button>
    </div>

</form>



@endsection