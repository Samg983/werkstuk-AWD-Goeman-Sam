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
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $blogpost->title }}</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Like</a>
                </div>
            </div>
            @endforeach
           <div class="row">
               <div class="col-lg-4 offset-lg-4 text-center">
                   {{ $blogposts->links() }}
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
