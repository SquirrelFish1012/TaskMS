<?php

/**
 * This is the task controller that fulfil following funcions:
 *   1. display a task, 
 *   2. display all tasks, 
 *   3. create a task,
 *   4. edit a task,
 *   5. delete a task
 * and call respective views to display result
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Session;

class TasksController extends Controller
{
    /**
     * Display all the tasks 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index')->withTasks($tasks);
    }

    /**
     * Generate a page where creating new tasks
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Handle POST data from the task creation, and store it in the database
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        Task::create($input);

        $msg = "Task '".$request->title."' succesfully added!";

        Session::flash('flash_message', $msg);

        //return redirect()->back();
        return redirect()->route('tasks.index');
    }

    /**
     * Show a single task
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show') -> withTask($task);
    }

    /**
     * Show the form for editing an existing task
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update an existing task in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        $task->fill($input)->save();

        $msg = "Task '".$request->title."' succesfully updated!";

        Session::flash('flash_message', $msg);

        return redirect()->route('tasks.index');
    }

    /**
     * Remove a task from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();
        $msg = "Task '".$task->title."' succesfully deleted!";
        Session::flash('flash_message', $msg);

        return redirect()->route('tasks.index');
    }
}
