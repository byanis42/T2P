<?php


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
    }

    public function storeTask(Request $request) {
        $task = new Task();
        $task->description = $request->description;
        $task->status = 'pending';
        $task->user_id = Auth::id();
        $task->save();

        return response()->json($task, 201);
    }

    public function updateTaskStatus(Request $request, Task $task) {
        $task->status = $request->status;
        $task->save();

        return response()->json($task, 200);
    }

    public function deleteTask(Task $task) {
        $task->delete();

        return response()->json(null, 204);
    }
}
