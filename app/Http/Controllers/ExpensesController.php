<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function getAll()
    {
        return Expenses::all();
    }

    public function getOne(Expenses $expense)
    {
        return $expense;
    }

    public function store(Request $request)
    {
        $expense = Expenses::create($request->all());

        return response()->json($expense, 201);
    }

    public function update(Request $request, Expenses $expense)
    {
        $expense->update($request->all());

        return response()->json($expense, 200);
    }

    public function delete(Expenses $expense)
    {
        $expense->delete();

        return response()->json(null, 204);
    }
}
