@extends('layout.app')

@section('content')

  <a class="btn btn-outline-primary" href="/">Back</a>
  <br><br>
  <h3><a href="todo/{{$todos->id}}">{{$todos->text}}</a> </h3>
  <span class="badge badge-danger">{{$todos->due}}</span>
  <hr>
  <p>{{$todos->body}}</p>
  <br><br>
  <a href="/todo/{{$todos->id}}/edit" class="btn btn-outline-success">Edit</a>
  {!! Form::open(['action' => ['App\Http\Controllers\TodosController@destroy',$todos->id],'method'=>'POST','class'=>'float-right']) !!}
  {{Form::hidden('_method','DELETE')}}
  {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
  {!! Form::close() !!}    
    
@endsection