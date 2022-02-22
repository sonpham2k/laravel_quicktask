<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguagesController;
use App\Http\Requests\StaffRequest;

class StaffsController extends Controller
{
    public function index()
    {
        $data['staffs'] = Staff::simplePaginate(config('app.paginate'));

        return view('staffs.index', $data);
    }

    public function create()
    {
        $data['departments'] = Department::simplePaginate(config('app.paginate'));

        return view('staffs.create', $data);
    }

    public function store(StaffRequest $request)
    {
        Staff::create([
            'name' => $request->input('staffname'),
            'address' => $request->input('address'),
            'department_id' => $request->input('department'),
        ]);

        return redirect()->route('staffs.index');
    }

    public function show(Staff $staff)
    {
        return view('staffs.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        $data['departments'] = Department::simplePaginate(config('app.paginate'));
        
        return view('staffs.edit', compact('staff'), $data);
    }

    public function update(StaffRequest $request, Staff $staff)
    {
        Staff::where('id', $staff->id)
            ->update([
                'name' => $request->input('staffname'),
                'address' => $request->input('address'),
                'department_id' => $request->input('department'),
            ]);

        return redirect()->route('staffs.index')->with('success');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staffs.index')->with('success');
    }
}
