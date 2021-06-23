<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index() { return Invoice::paginate(50); }

    public function show(int $id) { return Invoice::findOrFail($id); }

    public function store(Request $request) { return Invoice::create($request->all()); }

    public function destroy(int $id) { Invoice::destroy($id); return response()->noContent(); }
}
