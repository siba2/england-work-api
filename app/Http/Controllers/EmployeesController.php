<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function getAll()
    {
        return Employees::all();
    }

    public function getOne(Employees $employee)
    {
        return $employee;
    }

    public function store(Request $request)
    {
        $employee = Employees::create($request->all());

        return response()->json($employee, 201);
    }

    public function update(Request $request, Employees $employee)
    {
        $employee->update($request->all());

        return response()->json($employee, 200);
    }

    public function delete(Employees $employee)
    {
        $employee->delete();

        return response()->json(null, 204);
    }
}
