@extends('template_backend.home')
@section('sub-judul', 'Tambah Artikel')
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

<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Pilih Kategori</option>
            @foreach($category as $result)
            <option value=" {{$result -> id}}">{{ $result -> name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Pilih Tag</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    <div class=" form-group">
        <label>Konten</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <div class=" form-group">
        <button class="btn btn-primary">Tambah Artikel</button>
    </div>

</form>



@endsection