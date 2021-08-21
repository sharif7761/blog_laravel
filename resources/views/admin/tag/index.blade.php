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
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
