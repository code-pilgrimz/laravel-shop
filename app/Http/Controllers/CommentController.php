<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() { return Comment::paginate(50); }

    public function show(int $id) { return Comment::findOrFail($id); }

    public function store(Request $request) { return Comment::create($request->all()); }

    public function destroy(int $id) { Comment::destroy($id); return response()->noContent(); }
}
