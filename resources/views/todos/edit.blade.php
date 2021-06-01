@extends('layout.app')

@section('content')
<a class="btn btn-outline-primary" href="/todo/{{$todos->id}}">Back</a>
<br><br>
<h1>Edit Todo</h1>
{!! Form::open(['action' => ['App\Http\Controllers\TodosController@update',$todos->id],'method'=>'POST']) !!}
{{Form::bsText('text',$todos->text)}}
{{Form::bsTextArea('body',$todos->body)}}
{{Form::bsText('due',$todos->due)}}
{{Form::hidden('_method','PUT')}}
{{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}   



@endsection