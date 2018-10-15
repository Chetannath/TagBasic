@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <?php
        //dd($question);
      ?>
      @if(sizeOf($question)>0)
        @foreach ($question as $questions)
          <a href="{{ route('getAnswers',$questions->id)}}" class="btn btn-success">
            <label for="title">{{$questions->Question}}</label></br>
          </a>
        @endforeach;</br></br>
        <a href="{{route('AddQuestion',$questions->Tag_id)}}" class="btn btn-primary">Ask Question</a>
      @else
        <label for="title">This Question Not Have Any Answer Till</label></br>
        <a href="{{route('AddQuestion',$tId)}}" class="btn btn-primary">Ask Question</a>
      @endif
    </div>
</div>
@endsection
