<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguagesController;

class StaffsController extends Controller
{
    /* Hien thi danh sach nhan vien */
    public function index()
    {
        $staffs = Staff::latest()->paginate(config('app.paginate'));

        return view('staff.index', compact('staffs'));
    }

    public function create()
    {
       return view('staff.create');
    }

    public function store(Request $request)
    {
        Staff::create($request->all());

        return redirect()->route('staff.index')->with('sucess');
    }

    public function show(Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $staff->update($request->all());

        return redirect()->route('staff.index')->with('sucess');        
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index')->with('sucess');     
    }
}
