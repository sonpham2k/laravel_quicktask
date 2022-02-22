<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;
use App\Http\Requests\DepartRequest;

class DepartmentController extends Controller
{
    public function index()
    {
        $data['departments'] = Department::simplePaginate(config('app.paginate'));

        return view('departments.index', $data);
    }

    public function create()
    {
       return view('departments.create');
    }

    public function store(DepartRequest $request)
    {
        Department::create([
            'name' => $request->input('department_name'),
        ]);

        return redirect()->route('departments.index');
    }

    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(DepartRequest $request, Department $department)
    {
        Department::where('id', $department->id)
            ->update([
                'name' => $request->input('department_name'),
            ]);

        return redirect()->route('departments.index')->with('success');
    }

    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')->with('success');
    }
}
