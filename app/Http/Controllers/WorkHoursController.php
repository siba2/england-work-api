<?php

namespace App\Http\Controllers;

use App\WorkHours;
use Illuminate\Http\Request;

class WorkHoursController extends Controller
{
    public function getAll()
    {
        return WorkHours::all();
    }

    public function getOne(WorkHours $workHour)
    {
        return $workHour;
    }

    public function store(Request $request)
    {
        $workHour = WorkHours::create($request->all());

        return response()->json($workHour, 201);
    }

    public function update(Request $request, WorkHours $workHour)
    {
        $workHour->update($request->all());

        return response()->json($workHour, 200);
    }

    public function delete(WorkHours $workHour)
    {
        $workHour->delete();

        return response()->json(null, 204);
    }
}
