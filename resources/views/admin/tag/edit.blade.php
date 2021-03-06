@extends('admin.layouts.app')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            @include('admin.includes.messages')
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Tag
                    </h3>
                </div>
                <form method="post" action="{{ route('tag.update', $tag->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ $tag->slug }}" placeholder="Enter Slug">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
