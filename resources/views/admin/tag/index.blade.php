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
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <a href="#" class="btn btn-success">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
