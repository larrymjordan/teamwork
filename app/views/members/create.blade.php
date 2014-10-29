@extends('layouts.default')
@section('content')
<div class="row">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">{{Lang::get('general.create_member_title')}}</h1>
  <p class="information">{{Lang::get('general.create_member_information')}}</p>
    {{ Form::open(array('route' => 'members.store')) }}

      {{ Form::text('name', '', array('placeholder'=> Lang::get('general.name_placeholder'))) }}
      {{ $errors->first('name','<small class="error">:message</small>') }}

      {{ Form::text('lastname', '', array('placeholder'=> Lang::get('general.lastname_placeholder'))) }}
      {{ $errors->first('lastname','<small class="error">:message</small>') }}

      {{ Form::text('email', '', array('placeholder'=> Lang::get('general.email_placeholder'))) }}
      {{ $errors->first('email','<small class="error">:message</small>') }}

      {{ Form::submit('Create',array('class'=>'button')) }}

    {{ Form::close() }}
  </div>
</div>
@stop