<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $employeeCount = Employee::count();
        return view("dashboard", [
            'title' => 'EMS | Dashboard',
            'employeeCount' => $employeeCount,
        ]);
    }
}
