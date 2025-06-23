<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', [
            'title' => 'EMS | Employee List',
            'employees' => $employees,
        ]);
    }

    public function create()
    {
        return view('employee.create', [
            'title'=> 'EMS | Add Employee'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|unique:employees',
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:employees',
            'dob' => 'required|date',
            'doj' => 'required|date',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'title'=> 'EMS | Edit Employee',
            'employee' => $employee
        ]);
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'employee_id' => 'required|unique:employees,employee_id,' . $employee->id,
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'dob' => 'required|date',
            'doj' => 'required|date',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
