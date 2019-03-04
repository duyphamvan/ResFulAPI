@extends('welcome')
@section('content')

@if(count($blogs)==0)
    <p>Khong co du lieu</p>
@else
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $key =>$blog)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>
                <td>{{$blog->author}}</td>
                <td><img src="{{asset("storage/$blog->image")}}" alt="" width="200px" height="150px"></td>
                <td><a href="{{route('delete', $blog->id)}}" class="btn btn-danger">Delete</a></td>
                <td><a href="{{route('edit', $blog->id)}}" class="btn btn-warning">Update</a></td>
                <td><a href="{{route('show', $blog->id)}}" class="btn btn-success">Show</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
<a href="{{route('add')}}" class="btn btn-info">Add New Blog</a>
@endsection

