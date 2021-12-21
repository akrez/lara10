@extends('master')

@section('content-header')
<h1>پست‌ها</h1>
@endsection

@section('content')
    @foreach($posts as $postId => $post)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['header'] }}</h5>
                    <p class="card-text"></p>
                    <a href="{{ route('post.view', ['id' => $postId ]) }}" class="card-link"><i class="fa fa-anchor"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection