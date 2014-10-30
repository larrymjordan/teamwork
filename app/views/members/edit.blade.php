@extends('layouts.default')
@section('content')
<div class="row">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">{{Lang::get('general.edit_member_title')}}</h1>
  <p class="information">{{Lang::get('general.edit_member_information')}}</p>
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