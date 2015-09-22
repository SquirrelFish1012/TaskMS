<!-- This page defines the view for home page -->

<!-- use blade layout defined in views/layouts folder -->
@extends('layouts.master')

@section('content')

<h1> Welcome to Task Management System </h1>
<p class="lead">
	This is a demo task management system built on Laravel that can create/view/edit/delete tasks.
	You can start by viewing all existing tasks or creating your own one.
</p>
<hr>

<!-- Display View All Tasks button -->
<a href="{{ route('tasks.index') }}" class="btn btn-info"> 
	View Tasks 
</a>

<!-- Display Add New Task button -->
<a href="{{ route('tasks.create') }}" class="btn btn-primary">
	Add New Task
</a>

@stop