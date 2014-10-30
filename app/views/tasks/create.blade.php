@extends('layouts.default')
@section('content')
<div class="row create-task-container">
 <div class="columns large-6 large-centered create-container">
  <h1 class="form-title">{{ Lang::get('general.create_task_title') }}</h1>
  <p class="information">{{ Lang::get('general.create_task_information') }}</p>
    {{ Form::open(array('route' => 'tasks.store')) }}

      {{ Form::label('title', Lang::get('general.create_task_title_label'), array('class'=>'label-left')) }}
      {{ Form::text('title', '', array('placeholder'=> Lang::get('general.create_task_title_label'))) }}
      {{ $errors->first('title','<small class="error">:message</small>') }}

      {{ Form::label('description', Lang::get('general.create_task_description'), array('class'=>'label-left')) }}
      {{ Form::textarea('description', '', array('placeholder'=> Lang::get('general.create_task_description'))) }}
      {{ $errors->first('description','<small class="error">:message</small>') }}

      {{ Form::label('member_id', Lang::get('general.create_task_owner'), array('class'=>'label-left')) }}
      {{ Form::select('member_id', $members) }}
      {{ $errors->first('member_id','<small class="error">:message</small>') }}

      {{ Form::label('hours', Lang::get('general.create_task_hours'), array('class'=>'label-left')) }}
      {{ Form::input('number','hours', '', array('placeholder'=> Lang::get('general.create_task_hours'))) }}
      {{ $errors->first('hours','<small class="error">:message</small>') }}

      {{ Form::label('start_date', Lang::get('general.create_task_start_date'), array('class'=>'label-left')) }}
      {{ Form::input('date','start_date', '', array('placeholder'=> 'Start date')) }}
      {{ $errors->first('start_date','<small class="error">:message</small>') }}

      {{ Form::label('end_date', Lang::get('general.create_task_end_date'), array('class'=>'label-left')) }}
      {{ Form::input('date','end_date', '', array('placeholder'=> 'End date')) }}
      {{ $errors->first('end_date','<small class="error">:message</small>') }}

      {{ Form::submit('Crear',array('class'=>'button')) }}

    {{ Form::close() }}
  </div>
</div>
@stop