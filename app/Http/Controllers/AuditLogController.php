<?php

namespace App\Http\Controllers;

use App\Models\AuditLog;
use Illuminate\Http\Request;

class AuditLogController extends Controller
{
    public function index() { return AuditLog::paginate(50); }

    public function show(int $id) { return AuditLog::findOrFail($id); }

    public function store(Request $request) { return AuditLog::create($request->all()); }

    public function destroy(int $id) { AuditLog::destroy($id); return response()->noContent(); }
}
