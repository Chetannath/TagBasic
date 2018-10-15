@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form method="post" action="{{route('StoreTag')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="title">Tag Name : </label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection
