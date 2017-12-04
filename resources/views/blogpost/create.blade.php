@extends("layouts.master")



@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info"></p>
            </div>
        </div>
    <form>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Max filesize 1MB.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
