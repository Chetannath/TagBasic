@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <form method="post" action="{{route('StoreAns')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <input type="hidden" class="form-control" name="queId" value="{{$qId}}"/>
            <label for="title">Post Answer : </label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
</div>
@endsection
