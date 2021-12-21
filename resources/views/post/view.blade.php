@extends('master')

@section('content-header')
<h1>{{ $post['header'] }}</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        {{ $post['body'] }}
    </div>
</div>
@endsection