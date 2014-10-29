@extends('layouts.default')
@section('content')
<div class="row">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">Actualiza los datos de tu miembro</h1>
  <p class="information">
    Cambia el dato que quieras de tu miembro en la casilla correspondiente. Los cambios se veran reflejados automaticamente.
  </p>
  {{ Form::model($member, array('route' => ['members.update', $member->id], 'method' => 'PUT') ) }}

    {{ Form::label('name', 'Nombre', array('class'=>'label-left')) }}
    {{ Form::text('name') }}
    {{ $errors->first('name','<small class="error">:message</small>') }}

    {{ Form::label('lastname', 'Apellido', array('class'=>'label-left')) }}
    {{ Form::text('lastname') }}
    {{ $errors->first('lastname','<small class="error">:message</small>') }}

    {{ Form::label('email', 'Correo electronico', array('class'=>'label-left')) }}
    {{ Form::text('email') }}
    {{ $errors->first('email','<small class="error">:message</small>') }}

    {{ Form::submit('Guardar',array('class'=>'button')) }}

  {{ Form::close() }}
  </div>
</div>
@stop