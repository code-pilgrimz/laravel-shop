<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() { return Payment::paginate(50); }

    public function show(int $id) { return Payment::findOrFail($id); }

    public function store(Request $request) { return Payment::create($request->all()); }

    public function destroy(int $id) { Payment::destroy($id); return response()->noContent(); }
}
