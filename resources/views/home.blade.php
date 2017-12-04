@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <!--<div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>-->


            @foreach($blogposts as $blogpost)
            <div class="card col-xs-4">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $blogpost->title }}</h4>
                    <p class="card-text">{{ $blogpost->content }}</p>
                    <p>
                        {{ count($blogpost->likes) }}
                    </p>
                    <form action="{{ route("blogpost.like") }}" method="post">
                        <input type="hidden" class="form-control" id="blog_post_id" name="blog_post_id"
                               value="{{ $blogpost->id }}">

                        {{ csrf_field() }}

                        <input type="submit" class="form-control btn btn-primary" id="like" name="like" value="Like">
                    </form>
                </div>
            </div>
            @endforeach


           <div class="row">
               <div class="col-md-8 col-md-offset-2 text-center">
                   {{ $blogposts->links() }}
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
