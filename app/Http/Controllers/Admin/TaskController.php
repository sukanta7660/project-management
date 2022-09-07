<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index() :View
    {
        $tasks = Task::with('project', 'staff')->get();
        return view('admin.tasks.index', compact('tasks'));
    }

    public function edit(Task $task) :View
    {
        $project = Project::whereId($task->project_id)
            ->with('team')
            ->first()
        ;
        return view('admin.tasks.edit', compact('task', 'project'));
    }

    public function update(Request $request, $id) :RedirectResponse
    {
        //
    }

    public function destroy($id) :RedirectResponse
    {
        //
    }
}
