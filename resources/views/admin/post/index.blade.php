@extends('template_backend.home')
@section('sub-judul', 'Artikel')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session('success')}}
</div>
@endif

<a href="{{ route('post.create') }}" class="btn btn-info btn-sm mb-3">Tambah Artikel</a>
<table class=" table table-striped table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Artikel</th>
            <th>Kategori</th>
            <th>Daftar Tags</th>
            <th>Dipublish oleh</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($post as $result => $hasil) <tr>
            <td>{{ $result + $post-> firstitem()}}</td>
            <td>{{ $hasil -> judul}}</td>
            <td>{{ $hasil -> category->name}}</td>
            <td>@foreach($hasil->tags as $tag)
                <ul>
                    <h6><span class="badge badge-info">{{$tag -> name}}</span></h6>
                </ul>
                @endforeach
            </td>
            <td>{{$hasil -> users -> name}}</td>
            <td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width:100px;"></td>
            <td>
                <form action="{{ route('post.destroy', $hasil->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.edit', $hasil -> id)}}" class=" btn btn-primary btn-sm">Edit</a>
                    <button type="submit" a href="" class="btn btn-danger btn-sm">Hapus </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$post->links()}}
@endsection