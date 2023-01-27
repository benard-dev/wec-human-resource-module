<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //This function handles the dashboard
    public function dashboard() {
        return inertia('Employee/DashboardPage',
            [
                'message' => 'Hello from Laravel!'
            ]);
    }

    //This function handles serving the employee details page/component
    public function details() {
        // return inertia('Employee/Details');
    }

    //This function handles serving the employee contract page/component
    public function contract() {
        // return inertia('Employee/Contracts');
    }

    //This function handles serving the add employee page/component
    public function add() {

    }

    public function getDashboardData($id=1) {
        // Using the employee id, this function should return the following 
        // information employee details array (first name, surname, profile picture, email 
        // address, mobile phone number), current role at the organization, 
        // contract array (contract id, contract length, start date, end date), 
        // employees within the department array (employee first name, employee surname, 
        // employee email) in a JSON object
    }
}
