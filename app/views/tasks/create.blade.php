@extends('layouts.default')
@section('content')
<div class="row create-task-container">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">¿Listo para crear tus tareas?</h1>
  <p class="information">En este espacio puedes crear tus tareas y asignarlas
    a un miembro de tu equipo que inmediatamente sera notificado e informado
    al respecto. Revisa en la lista de tareas quienes estan haciendo que
    actividad.</p>
    {{ Form::open(array('route' => 'tasks.store')) }}

      {{ Form::label('title', 'Titulo', array('class'=>'label-left')) }}
      {{ Form::text('title', '', array('placeholder'=> 'Title')) }}
      {{ $errors->first('title','<small class="error">:message</small>') }}

      {{ Form::label('description', 'Descripcion', array('class'=>'label-left')) }}
      {{ Form::textarea('description', '', array('placeholder'=> 'Description')) }}
      {{ $errors->first('description','<small class="error">:message</small>') }}

      {{ Form::label('member_id', 'Owner', array('class'=>'label-left')) }}
      {{ Form::select('member_id', $members) }}
      {{ $errors->first('member_id','<small class="error">:message</small>') }}

      {{ Form::label('hours', 'Hours', array('class'=>'label-left')) }}
      {{ Form::input('number','hours', '', array('placeholder'=> 'Hours')) }}
      {{ $errors->first('hours','<small class="error">:message</small>') }}

      {{ Form::label('start_date', 'Start date', array('class'=>'label-left')) }}
      {{ Form::input('date','start_date', '', array('placeholder'=> 'Start date')) }}
      {{ $errors->first('start_date','<small class="error">:message</small>') }}

      {{ Form::label('end_date', 'End date', array('class'=>'label-left')) }}
      {{ Form::input('date','end_date', '', array('placeholder'=> 'End date')) }}
      {{ $errors->first('end_date','<small class="error">:message</small>') }}

      {{ Form::submit('Create',array('class'=>'button')) }}

    {{ Form::close() }}
  </div>
</div>
@stop