<?php

namespace App\Http\Controllers;

use App\Models\Webhook;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function index() { return Webhook::paginate(50); }

    public function show(int $id) { return Webhook::findOrFail($id); }

    public function store(Request $request) { return Webhook::create($request->all()); }

    public function destroy(int $id) { Webhook::destroy($id); return response()->noContent(); }
}
