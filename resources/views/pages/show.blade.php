@extends('layouts.main-layout')
@section('content')
    
<table border="1px" class="my-3">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Author</th>
        <th>Content</th>
        <th>Category_id</th>
        <th>Created_at</th>
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
                    {{ $post -> created_at }}
                </td>
          </tr>
      @endforeach
</table>
@endsection