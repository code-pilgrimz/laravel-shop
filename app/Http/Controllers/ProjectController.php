<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() { return Project::paginate(50); }

    public function show(int $id) { return Project::findOrFail($id); }

    public function store(Request $request) { return Project::create($request->all()); }

    public function destroy(int $id) { Project::destroy($id); return response()->noContent(); }
}
