@extends('layouts.default')
@section('content')
<div class="row create-task-container">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">Actualiza la información de las tareas</h1>
  <p class="information">Cambia el dato que quieras de tu tarea en la casilla correspondiente, también 
  puedes finalizar tu tarea.</p>
    {{ Form::model($task, array('route' => ['tasks.update', $task->id], 'method' => 'PUT') ) }}

      <div>{{ Form::label('completed', 'Completed', array('class'=>'label-left')) }}
      {{ Form::checkbox('completed') }}</div>
      {{ $errors->first('completed','<small class="error">:message</small>') }}

      {{ Form::label('title', 'Titulo', array('class'=>'label-left')) }}
      {{ Form::text('title') }}
      {{ $errors->first('title','<small class="error">:message</small>') }}

      {{ Form::label('description', 'Descripcion', array('class'=>'label-left')) }}
      {{ Form::textarea('description') }}
      {{ $errors->first('description','<small class="error">:message</small>') }}

      {{ Form::label('member_id', 'Owner', array('class'=>'label-left')) }}
      {{ Form::select('member_id', $members) }}
      {{ $errors->first('member_id','<small class="error">:message</small>') }}

      {{ Form::label('hours', 'Hours', array('class'=>'label-left')) }}
      {{ Form::input('number','hours') }}
      {{ $errors->first('hours','<small class="error">:message</small>') }}

      {{ Form::label('start_date', 'Start date', array('class'=>'label-left')) }}
      {{ Form::input('date','start_date') }}
      {{ $errors->first('start_date','<small class="error">:message</small>') }}

      {{ Form::label('end_date', 'End date', array('class'=>'label-left')) }}
      {{ Form::input('date','end_date') }}
      {{ $errors->first('end_date','<small class="error">:message</small>') }}

      {{ Form::submit('Guardar',array('class'=>'button')) }}

    {{ Form::close() }}
  </div>
</div>  
@stop