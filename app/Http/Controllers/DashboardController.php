<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of tasks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoTasks = Auth::user()->tasks()->where('completed', false)->get();
        $completedTasks = Auth::user()->tasks()->where('completed', true)->get();

        return view('dashboard', ['todoTasks' => $todoTasks, 'completedTasks' => $completedTasks]);

       // $tasks = Auth::user()->tasks;

        //return view('dashboard', ['tasks' => $tasks]);
    }

    /**
     * Store a newly created task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTask(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $task = new Task;
        $task->description = $request->description;
        $task->user_id = Auth::user()->id;
        $task->save();

        return back()->with('success', 'Task added successfully');
    }

    /**
     * Remove the specified task from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function deleteTask(Task $task)
    {
        $this->authorize('delete', $task);

        $task->delete();

        return back()->with('success', 'Task deleted successfully');
    }

    /**
     * Update the status of the specified task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function updateTaskStatus(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $task->completed = !$task->completed; 
        $task->save();

        return back()->with('success', 'Task updated successfully');
    }
}
