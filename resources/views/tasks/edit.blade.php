<!-- This page defines the view for edit a task page -->

<!-- use blade layout defined in views/layouts folder -->
@extends('layouts.master')

@section('content')

	<h1>Edit Task</h1>

	<p class="lead">
		Edit this task below.
		<a href="{{ route('tasks.index') }}">
			Go back to all tasks.
		</a>
	</p>

	<hr>

	<!-- Include error handle layout -->
	@include('alerts.errors')

	{!! Form::model($task, [
	    'method' => 'PATCH',
	    'route' => ['tasks.update', $task->id]
	]) !!}

	<!-- Display a blank text form for entering task title -->
	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	    {!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Display a blank text form for entering task description -->
	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
	    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	</div>

	<!-- Display Update Task button -->
	{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}
	<!-- Display Cancel button -->
	<a href="{{ route('tasks.index', $task->id) }}" class="btn btn-info">Cancel</a>
	{!! Form::close() !!}

	
@stop