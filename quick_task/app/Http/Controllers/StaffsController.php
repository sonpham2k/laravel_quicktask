<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguagesController;
use App\Http\Requests\ValidateRequest;

class StaffsController extends Controller
{
    public function index()
    {
        $data['staffs'] = Staff::simplePaginate(config('app.paginate'));

        return view('staff.index', $data);     
    }

    public function create()
    {
        $data['departments'] = Department::simplePaginate(config('app.paginate'));
       return view('staff.create', $data);
    }

    public function store(Request $request)
    {
        Staff::create([
            'name' => $request->input('staffname'),
            'address' => $request->input('address'),
            'department_id' => $request->input('department'),
        ]);

        return redirect()->route('staff.index');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        $data['departments'] = Department::simplePaginate(config('app.paginate'));
        return view('staff.edit', compact('staff'), $data);
    }

    public function update(Request $request, Staff $staff,ValidateRequest $request2)
    {
        Staff::where('id', $staff->id)
            ->update([
                'name' => $request->input('staffname'),
                'address' => $request->input('address'),
                'department_id' => $request->input('department'),
            ]);

        return redirect()->route('staff.index')->with('success');        
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')->with('success');     
    }
}
