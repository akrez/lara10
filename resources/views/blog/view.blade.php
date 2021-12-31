@extends('master')

@section('content-header')
<h1>{{ $blog->title }}</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <img src="{{ $blog->img_url }}">
    </div>
    <div class="col-md-9">
        {{ $blog->content }}
    </div>
</div>
@foreach($blog->Comments as $comment)
<div class="row">
    <div class="col-md-3">
        {{ $comment->comment }}
    </div>
</div>
@endforeach
<form action="{{ route('blogComment.store', ['blog_id' => $blog->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Title</label>
        <input class="form-control" name="comment">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
@endsection