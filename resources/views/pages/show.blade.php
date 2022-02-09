@extends('layouts.main-layout')
@section('content')
    
<table border="1px" class="my-3">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Content</th>
        <th>Category_id</th>
        <th>Tag</th>
        <th>Created_at</th>
        <th>Action</th>
      </tr>
      @foreach ($posts as $post)
          <tr>
                <td>
                    {{ $post -> id }}
                </td>
                <td>
                    {{ $post -> title }}
                </td>
                <td>
                    {{ $post -> author }}
                </td>
                <td>
                    {{ $post -> content }}
                </td>
                <td>
                    {{ $post -> category_id }}
                </td>
                <td>
                    @foreach ($post -> tags as $tag)
                    {{ $tag -> name }}
                    @endforeach
                </td>
                <td>
                    {{ $post -> created_at }}
                </td>
                <td>
                    <a class="btn btn-secondary my-2" href="#">EDIT</a>
                    <a class="btn btn-danger my-2" href="{{ route('delete', $post -> id) }}">DELETE</a>
                </td>
          </tr>
      @endforeach
</table>
@endsection