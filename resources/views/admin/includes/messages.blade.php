@if($errors)
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
@endif
@if(Session::has('message'))
    <p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
