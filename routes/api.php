<?php

use Illuminate\Support\Facades\Route;
Route::apiResource('users', App\Http\Controllers\UserController::class);
Route::apiResource('organizations', App\Http\Controllers\OrganizationController::class);
Route::apiResource('projects', App\Http\Controllers\ProjectController::class);
Route::apiResource('tasks', App\Http\Controllers\TaskController::class);
Route::apiResource('comments', App\Http\Controllers\CommentController::class);
Route::apiResource('tags', App\Http\Controllers\TagController::class);
Route::apiResource('invoices', App\Http\Controllers\InvoiceController::class);
Route::apiResource('payments', App\Http\Controllers\PaymentController::class);
Route::apiResource('notifications', App\Http\Controllers\NotificationController::class);
Route::apiResource('webhooks', App\Http\Controllers\WebhookController::class);
Route::apiResource('api_keys', App\Http\Controllers\ApiKeyController::class);
Route::apiResource('audit_logs', App\Http\Controllers\AuditLogController::class);
