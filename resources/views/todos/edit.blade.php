@extends('layouts.app')

@section('content')
<a class ="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
  <h1>Edit Todo</h1>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'PUT']) !!}
    {{ Form::bsText('text', $todo->text) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::bsSubmit('Submit',['class' => "btb btn-primary"]) }}
  {!! Form::close() !!}
@endsection
