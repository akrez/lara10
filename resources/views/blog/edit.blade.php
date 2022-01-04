@extends('master')

@section('content-header', $blog->title)

@section('content')
<form action="{{ route('blog.update', ['id' => $blog->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title" value="{{ $blog->title }}">
    </div>

    <div class="form-group">
        <label>Abstract</label>
        <input class="form-control" name="abstract" value="{{ $blog->abstract }}">
    </div>

    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content">{{ $blog->content }}</textarea>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input class="form-control" name="img_url" value="{{ $blog->img_url }}">
    </div>

    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
@endsection