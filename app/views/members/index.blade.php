@extends('layouts.default')
@section('content')
<div class="row members-wrapper">
  <div class="columns large-9 large-centered">
    @foreach($members as $member)
      <div class="row member-container">
        <div class="columns large-10">
          {{ HTML::image('images/user-avatar.png','avatar.png',array('class'=>'avatar')) }}
          <div class="member-info">
            {{ HTML::linkAction('members.show',$member->name . ' ' . $member->lastname,[$member->id],['class'=>'member-name']) }}<br>
            <span class="member-email">{{ $member->email }}</span>
            <span class="member-tasks">{{Lang::get('general.assign_task_label')}}:   &nbsp;   <font class="member-email">{{$member->tasks()->count()}}</font></span>
            <span class="member-tasks">{{Lang::get('general.complete_task_label')}}: &nbsp;   <font class="member-email">{{$member->completedTasks()->count()}}</font></span>
          </div>
        </div>
        <div class="columns large-1">
          {{ HTML::linkAction('members.edit',Lang::get('general.edit_label'),[$member->id],['class'=>'button tiny']) }}
        </div>
        <div class="columns large-1">
          {{ Form::model($member, ['route' => ['members.destroy', $member->id], 'method' => 'DELETE' ]) }}
            {{ Form::button(Lang::get('general.remove_label'), ['type' => 'submit', 'class' => 'tiny alert button'])}}
          {{ Form::close() }}
        </div>
      </div>
    @endforeach
  </div>
</div>
@stop