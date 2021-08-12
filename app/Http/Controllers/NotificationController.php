<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() { return Notification::paginate(50); }

    public function show(int $id) { return Notification::findOrFail($id); }

    public function store(Request $request) { return Notification::create($request->all()); }

    public function destroy(int $id) { Notification::destroy($id); return response()->noContent(); }
}
