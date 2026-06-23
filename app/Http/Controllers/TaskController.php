<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the user's tasks with filter, search, and pagination.
     */
    public function index(Request $request)
    {
        $query = Task::where('user_id', auth()->id());

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by priority
        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        // Search by title or description
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        $tasks = $query->latest()->paginate(10);

        return response()->json([
            'status' => 'success',
            'data' => $tasks,
        ], 200);
    }

    /**
     * Store a newly created task.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'priority' => 'required|in:low,medium,high',
            'due_date' => 'nullable|date|after_or_equal:today',
        ]);

        $validated['user_id'] = auth()->id();

        $task = Task::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Task created successfully',
            'data' => $task,
        ], 201);
    }

    /**
     * Display the specified task.
     */
    public function show(string $id)
    {
        $task = Task::where('user_id', auth()->id())->find($id);

        if (! $task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ], 200);
    }

    /**
     * Update the specified task.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::where('user_id', auth()->id())->find($id);

        if (! $task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found',
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'sometimes|required|in:pending,in_progress,completed',
            'priority' => 'sometimes|required|in:low,medium,high',
            'due_date' => 'nullable|date|after_or_equal:today',
        ]);

        $task->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Task updated successfully',
            'data' => $task->fresh(),
        ], 200);
    }

    /**
     * Remove the specified task.
     */
    public function destroy(string $id)
    {
        $task = Task::where('user_id', auth()->id())->find($id);

        if (! $task) {
            return response()->json([
                'status' => 'error',
                'message' => 'Task not found',
            ], 404);
        }

        $task->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Task deleted successfully',
        ], 200);
    }
}
