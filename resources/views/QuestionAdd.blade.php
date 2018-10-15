@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form method="post" action="{{route('StoreQue')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <input type="hidden" class="form-control" name="tagId" value="{{$tId}}"/>
            <label for="title">Post Question : </label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
</div>
@endsection
