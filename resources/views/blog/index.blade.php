@extends('master')

@section('content-header')
<h1>بلاگ ها</h1>
@endsection

@section('content')
      @foreach($blogs as $blog)
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text"></p>
                    <a href="{{ route('blog.view', ['id' => $blog->id ]) }}" class="card-link"><i class="fa fa-anchor"></i></a>
                    <a href="{{ route('blog.edit', ['id' => $blog->id ]) }}" class="card-link"><i class="fa fa-edit"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection