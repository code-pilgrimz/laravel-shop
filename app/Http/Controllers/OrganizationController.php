<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index() { return Organization::paginate(50); }

    public function show(int $id) { return Organization::findOrFail($id); }

    public function store(Request $request) { return Organization::create($request->all()); }

    public function destroy(int $id) { Organization::destroy($id); return response()->noContent(); }
}
