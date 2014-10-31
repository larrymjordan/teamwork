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
				{{ HTML::linkAction('tasks.show',$task->title,[$task->id],['class'=>'member-name']) }}
				<small class="small-date">{{ $task->created_at }}</small> <br/>
				<span class="small-text">Responsable: &nbsp;</span><span class="task-owner">{{ $task->member->name . ' ' . $task->member->lastname }}</span>
				<span class="small-task-info">| &nbsp; Duracion: &nbsp; <font class="task-owner"> {{$task->hours }}     </font> &nbsp; Hrs. </span>
				<span class="small-task-info">| &nbsp; Inicio:   &nbsp; <font class="task-owner"> {{$task->start_date}} </font>             </span>
				<span class="small-task-info">| &nbsp; Fin:      &nbsp; <font class="task-owner"> {{$task->end_date }}  </font>             </span>
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
				{{ HTML::linkAction('tasks.show',$task->title,[$task->id],['class'=>'member-name']) }}
				<small class="small-date">{{ $task->created_at }}</small> <br/>
				<span class="small-text">Responsable: &nbsp;</span><span class="task-owner">{{ $task->member->name . ' ' . $task->member->lastname }}</span>
				<span class="small-task-info">| &nbsp; Duracion: &nbsp; <font class="task-owner"> {{$task->hours }}     </font> &nbsp; Hrs. </span>
				<span class="small-task-info">| &nbsp; Inicio:   &nbsp; <font class="task-owner"> {{$task->start_date}} </font>             </span>
				<span class="small-task-info">| &nbsp; Fin:      &nbsp; <font class="task-owner"> {{$task->end_date }}  </font>             </span>
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