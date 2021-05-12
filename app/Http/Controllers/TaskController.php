<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() { return Task::paginate(50); }

    public function show(int $id) { return Task::findOrFail($id); }

    public function store(Request $request) { return Task::create($request->all()); }

    public function destroy(int $id) { Task::destroy($id); return response()->noContent(); }
}
