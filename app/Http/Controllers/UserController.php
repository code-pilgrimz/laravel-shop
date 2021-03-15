<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() { return User::paginate(50); }

    public function show(int $id) { return User::findOrFail($id); }

    public function store(Request $request) { return User::create($request->all()); }

    public function destroy(int $id) { User::destroy($id); return response()->noContent(); }
}
