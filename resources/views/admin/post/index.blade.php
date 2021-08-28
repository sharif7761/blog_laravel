@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @include('admin.includes.messages')
                <a href="{{ route('post.create') }}" class="btn btn-primary my-2">Add Post</a>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Post Table
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subtitle</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->subtitle }}</td>
                                <td>{{ $post->status == 1 ? 'Published' : 'Drafted' }}</td>
                                <td>{{ $post->posted_by }}</td>
                                <td>
                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
