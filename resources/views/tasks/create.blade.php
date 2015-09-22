<!-- This page defines the view for create a task page -->

<!-- use blade layout defined in views/layouts folder -->
@extends('layouts.master')

@section('content')
	
	<h1>Add a New Task</h1>
	<p class="lead">
		Add to your task list below.
		<a href="{{ route('tasks.index') }}">Go back to all tasks.</a>
	</p>
	<hr>

	<!-- Include error handle layout -->
	@include('alerts.errors')

	{!! Form::open(['route' => 'tasks.store']) !!}

		<!-- Display a text form for editing task title -->
		<div class="form-group">
		    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
		    {!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Display a text form for editing task description -->
		<div class="form-group">
		    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
		    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		</div>

		<!-- Display Create New Task button -->
		{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}
		<!-- Display Cancel button -->
		<a href="{{ route('tasks.index') }}" class="btn btn-info">Cancel</a>

	{!! Form::close() !!}

@stop