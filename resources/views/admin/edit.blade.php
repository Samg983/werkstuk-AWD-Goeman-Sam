@extends("layouts.master")



@section("content")

    @if(count($errors->all()))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    @endif

    <div class="row">
        <div class="container">
            <h3>Create blogpost</h3>
            <form action="{{ route("blogposts.store") }}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $editBlogPost->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" class="form-control" id="content" name="content">{{ $editBlogPost->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Max filesize 1MB.</small>
                </div>

                @foreach($tags as $tag)
                    <div class="checkbox">
                        <label><input type="checkbox" value="{{ $tag->id }}" {{ $editBlogPost->tags->contains($tag->id) ? 'checked' : '' }} name="tags[]">{{ $tag->name }}</label>
                    </div>
                @endforeach

                {{ csrf_field() }}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
