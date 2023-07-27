<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index() : View
    {
        $tasks = Task::orderBy('priority')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request) : RedirectResponse
    {
        $task = new Task();
        $task->task_name = $request->input('task_name');
        $task->priority = Task::count() + 1;
        $task->save();

        return redirect()->route('tasks.index');
    }
    public function update(Request $request, $taskId): RedirectResponse
    {
        $task = Task::find($taskId);

        $task->task_name = $request->input('task_name');
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function edit($taskId): View
    {
        $tasks = Task::find($taskId);
        return view('tasks.edit', compact('tasks'));
    }

    public function destroy(Task $task) : RedirectResponse
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
