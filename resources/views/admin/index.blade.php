@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Admin</h1>
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


                <div class="table table-responsive">
                    <table id="mytable" class="table table-bordered table-hover">

                        <thead class="thead-dark">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>

                        <tbody>
                        @foreach($blogposts as $blogpost)

                            <tr>
                                <td>{{ $blogpost->id }}</td>
                                <td>{{ $blogpost->title }}</td>
                                <td><a class="btn btn-primary btn-xs" href="{{ route("blogposts.edit", ['blogpost' => $blogpost]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                <td><a class="btn btn-danger btn-xs" href="{{ route("blogposts.destroy", ['blogpost' => $blogpost]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        {{ $blogposts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
