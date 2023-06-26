<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Affiche la page du tableau de bord.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $tasksTodo = Task::where('user_id', auth()->id())
            ->where('status', 'todo')
            ->orderBy('created_at', 'desc')
            ->get();

        $tasksCompleted = Task::where('user_id', auth()->id())
            ->where('status', 'completed')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dashboard', compact('tasksTodo', 'tasksCompleted'));
    }

    /**
     * Ajoute une nouvelle tâche à la liste "À faire" (TODO).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeTask(Request $request)
    {
        $request->validate([
            'task' => 'required|string|max:255',
        ]);

        $task = new Task();
        $task->user_id = auth()->id();
        $task->task = $request->task;
        $task->status = 'todo';
        $task->save();

        return redirect()->route('dashboard')->with('success', 'Tâche ajoutée avec succès.');
    }

    /**
     * Supprime une tâche de la liste.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteTask(Task $task)
    {
        $task->delete();

        return redirect()->route('dashboard')->with('success', 'Tâche supprimée avec succès.');
    }

    /**
     * Met à jour le statut d'une tâche.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateTaskStatus(Request $request, Task $task)
    {
        $status = $request->input('status');
        $task->status = $status;
        $task->save();

        return redirect()->route('dashboard')->with('success', 'Statut de la tâche mis à jour avec succès.');
    }
}
