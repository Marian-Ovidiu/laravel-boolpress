@extends('templates.base')

@section('title', 'Create Post')

@section('content')

<form action="{{route('post.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="col-auto my-1">
        <label for="author_id">Select Author</label>
        <select class="form-control" name="author_id" id="author_id">
          @foreach ($authors as $author)
            <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Insert title of post">
    </div>
    <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body" rows="6" placeholder="Write here..."></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crea Post</button>
</form>

@endsection
