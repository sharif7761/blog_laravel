@extends('admin.layouts.app')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @include('admin.includes.messages')
                <a href="{{ route('tag.create') }}" class="btn btn-primary my-2">Add Tag</a>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Tag Table
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $tag->name }}</td>
                                <td>{{ $tag->slug }}</td>
                                <td>
                                    <a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('tag.destroy', $tag->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this tag?');">Delete</button>
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
