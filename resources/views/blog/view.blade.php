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
@endsection