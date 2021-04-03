@extends('templates.base')

@section('title', 'index Comments')

@section('content')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Comment</th>
        <th scope="col">Post</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
            <tr>
                <th scope="row">{{$comment->id}}</th>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->post->title}}</td>
            </tr>
      @endforeach
    </tbody>
  </table>


@endsection
