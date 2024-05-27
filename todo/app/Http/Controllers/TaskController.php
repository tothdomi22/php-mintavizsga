<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteRequest;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('task.index', [
            'tasks' => Task::query()->where('user_id', '=',  Auth()->id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        Task::query()->create($request->validated());
        return redirect('/tasks')->with('status', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->update($request->validated());
        return redirect('/tasks')->with('status', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('status', 'Task deleted successfully!');
    }
    public function complete(Task $task, CompleteRequest $request) {
        $task->update($request->validated());
        return redirect('/tasks')->with('status', 'Task updated successfully!');
    }
}
