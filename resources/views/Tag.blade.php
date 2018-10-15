@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <?php
        //dd($tag);
      ?>
      @foreach ($tag as $tags)
        <a href="{{ route('getQuestion',$tags->ID)}}" class="btn btn-success">
          <label for="title" value="{{$tags->ID}}">{{$tags->Tag_name}}</label></br>
        </a>
      @endforeach;</br></br>
      <a href="{{route('AddTag')}}" class="btn btn-primary">Create Tag</a>
    </div>
</div>
@endsection
