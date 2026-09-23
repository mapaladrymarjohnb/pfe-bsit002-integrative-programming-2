<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index']);

Route::get('/students', function () {
    return response()->json([
        [
            'id' => 1,
            'name' => 'Juan Dela Cruz',
            'course' => 'BSIT'
        ],
        [
            'id' => 2,
            'name' => 'Maria Santos',
            'course' => 'BSIT'
        ]
    ]);
});
