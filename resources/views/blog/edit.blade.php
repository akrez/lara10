@extends('master')

@section('content-header')
<h1>{{ $blog->title }}</h1>
@endsection

@section('content')
<form action="{{ route('blog.store', ['id' => $blog->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="title">
    </div>

    <div class="form-group">
        <label>Abstract</label>
        <input class="form-control" name="abstract">
    </div>

    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content"></textarea>
    </div>

    <div class="form-group">
        <label>Image</label>
        <input class="form-control" name="img_url">
    </div>

    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
@endsection