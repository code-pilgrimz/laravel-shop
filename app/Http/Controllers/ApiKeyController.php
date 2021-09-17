<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;

class ApiKeyController extends Controller
{
    public function index() { return ApiKey::paginate(50); }

    public function show(int $id) { return ApiKey::findOrFail($id); }

    public function store(Request $request) { return ApiKey::create($request->all()); }

    public function destroy(int $id) { ApiKey::destroy($id); return response()->noContent(); }
}
