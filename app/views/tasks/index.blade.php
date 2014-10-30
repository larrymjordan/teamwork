@extends('layouts.default')
@section('content')
<div class="row members-wrapper">
	<div class="columns large-9 large-centered">
	@foreach($tasks as $task)
	<div class="row member-container">
		<div class="columns large-10">
			{{ HTML::image('images/user-avatar.png','avatar.png',array('class'=>'avatar')) }}
			<div class="member-info">
				{{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}<br>
				{{ $task->member->name . ' ' . $task->member->lastname }}<br>
				<small>{{ $task->created_at }}</small>
			</div>
		</div>
		<div class="columns large-1">
			{{ HTML::linkAction('tasks.edit','Edit',[$task->id],['class'=>'button tiny']) }}
		</div>
		<div class="columns large-1">
			{{ Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'DELETE' ]) }}
			{{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
			{{ Form::close() }}
		</div>
	</div>
	@endforeach
	</div>
</div>
@stop