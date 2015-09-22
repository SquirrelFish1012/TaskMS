<!-- This page defines the view for showing all tasks page -->

<!-- use blade layout defined in views/layouts folder -->
@extends('layouts.master')

@section('content')

<h1>Task List</h1>
<p class="lead">
	Here's a list of all your tasks. 
	<a href="{{ route('tasks.create') }}">Add a new one?</a>
</p>

<hr>

<!-- for each task, display its title, short version description,
an edit button, a view button, and a delete button -->
@foreach($tasks as $task)
	<!-- Display task title -->
    <h3>{{ $task->title }}</h3>

    <!-- Display short version task description -->
    <p>{{ str_limit($task->description, 60, '...') }}</p>

    <!-- Display Delete Task button -->
    <div class="pull-right">
    	{!! Form::open(['method'=>'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
			{!! Form::submit('Delete this task', ['class'=>'btn btn-danger']) !!}
		{!! Form::close() !!}
	</div>

    <p>
    	<!-- Display Edit Task button -->
    	<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
        <!-- Display View Task button -->
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
    </p>
    <hr>
@endforeach


@stop