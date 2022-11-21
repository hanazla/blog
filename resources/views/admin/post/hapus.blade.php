@extends('template_backend.home')
@section('sub-judul', 'Trashed Artikel')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session('success')}}
</div>
@endif

<table class=" table table-striped table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Artikel</th>
            <th>Kategori</th>
            <th>Tag</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($post as $result => $hasil) <tr>
            <td>{{ $result + $post-> firstitem()}}</td>
            <td>{{ $hasil -> judul}}</td>
            <td>{{ $hasil -> name}}</td>
            <td>@foreach($hasil->tags as $tag)
                <ul>
                    <li>{{$tag -> name}}</li>
                </ul>
                @endforeach
            </td>
            <td><img src="{{asset($hasil->gambar)}}" class="img-fluid" style="width:100px;"></td>
            <td>
                <form action="{{ route('post.kill', $hasil->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('post.restore', $hasil->id)}}" class="btn btn-info btn-sm">Restore</a>
                    <button type="submit" a href="" class="btn btn-danger btn-sm">Hapus </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$post->links()}}
@endsection