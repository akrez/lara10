@extends('master')

@section('content-header', 'بلاگ ها')

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
                <a href="{{ route('blog.delete', ['id' => $blog->id ]) }}" class="card-link"><i class="fa fa-trash"></i></a>
            </div>
        </div>
    </div>
</div>
@endforeach

{{ $blogs->onEachSide(3)->links() }}

<form action="{{ route('blog.store') }}" method="POST">
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

{{ dump($blogs)  }}
@endsection