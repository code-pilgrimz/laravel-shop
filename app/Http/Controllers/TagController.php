<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() { return Tag::paginate(50); }

    public function show(int $id) { return Tag::findOrFail($id); }

    public function store(Request $request) { return Tag::create($request->all()); }

    public function destroy(int $id) { Tag::destroy($id); return response()->noContent(); }
}
