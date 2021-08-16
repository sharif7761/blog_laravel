@extends('admin.layouts.app')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Post
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subtitle</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Subtitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Slug">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <textarea id="summernote"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Publish</label>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
