<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index() {
        return inertia('Employee/Index',
            [
                'message' => 'Hello from Laravel!'
            ]);
    }

    public function show() {
        return inertia('Employee/Show');
    }
}
