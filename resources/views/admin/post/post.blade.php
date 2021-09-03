@extends('admin.layouts.app')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('admin.includes.messages')
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Post
                    </h3>
                </div>
                <form method="post" action="{{ route('post.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Subtitle">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <select class="select2bs4" multiple="multiple" name="tags" data-placeholder="Select a Tags"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="select2bs4" multiple="multiple" name="tags" data-placeholder="Select a Categories"
                                    style="width: 100%;">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="summernote" name="body"></textarea>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status" value="1">
                            <label class="form-check-label" for="status">Publish</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
