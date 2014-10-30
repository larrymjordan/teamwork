@extends('layouts.default')
@section('content')
<div class="row members-wrapper">
	<div class="columns large-9 large-centered">
	<p class="title-task">Tareas Pendientes</p>
	@foreach($tasksIncompleted as $task)
	<div class="row member-container">
		<div class="columns large-10">
			{{ HTML::image('images/task-incompleted.png','avatar.png',array('class'=>'avatar')) }}
			<div class="member-info">
				{{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}
				<span class="member-tasks">{{ 'Duración:' . $task->hours }}</span><br>
				<span class="member-tasks">{{ 'Inicio:' . $task->start_date . ' Fin: ' . $task->end_date }}</span><br>					
				<span class="member-tasks">{{ $task->member->name . ' ' . $task->member->lastname }}</span>
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
	 <br><br>
	<p class="title-task">Tareas Terminadas</p>
	@foreach($tasksCompleted as $task)
	<div class="row member-container">
		<div class="columns large-10">
			{{ HTML::image('images/task-completed.png','avatar.png',array('class'=>'avatar')) }}
			<div class="member-info">
				{{ HTML::linkAction('tasks.show',$task->title,[$task->id],[]) }}
				<span class="member-tasks">{{ 'Duración:' . $task->hours }}</span><br>
				<span class="member-tasks">{{ 'Inicio:' . $task->start_date . ' Fin: ' . $task->end_date }}</span><br>					
				<span class="member-tasks">{{ $task->member->name . ' ' . $task->member->lastname }}</span>
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