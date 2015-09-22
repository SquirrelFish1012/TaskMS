<!-- This page defines the view for show a task page -->

<!-- use blade layout defined in views/layouts folder -->
@extends('layouts.master')

@section('content')
	
	<!-- Display task title -->
	<h1>{{ $task->title }}</h1>

	<!-- Display task description -->
	<p class="lead">{{ $task->description }}</p>
	<hr>

	<!-- Display Edit Task button -->
	<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">
		Edit Task
	</a>

	<!-- Display View All Tasks button -->
	<a href="{{ route('tasks.index') }}" class="btn btn-info">
		Back to all tasks
	</a>

	<!-- Display Delete Task button -->
	<div class="pull-right">
		{!! Form::open(['method'=>'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
			{!! Form::submit('Delete this task', ['class'=>'btn btn-danger']) !!}
		{!! Form::close() !!}
	</div>

@stop