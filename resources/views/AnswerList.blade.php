@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <?php
        //dd($answer);
      ?>
      @if(sizeOf($answer)>0)
        @foreach ($answer as $answers)
            <label for="title">{{$answers->Answer}}</label></br>
        @endforeach</br></br>
        <a href="{{route('AddAnswer',$qId)}}" class="btn btn-primary">Post Your Answer</a>
      @else
        <label for="title">This Question Not Have Any Answer Till</label></br>
        <a href="{{route('AddAnswer',$qId)}}" class="btn btn-primary">Post Your Answer</a>
      @endif
    </div>
</div>
@endsection
