<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employees'] =  Employees::all();
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $employee = new Employees();
        $employee->name = $request->name;
        $employee->salary = $request->salary;
        $employee->department = $request->department;
        $employee->address = $request->address;
        $employee->dob = $request->dob;
        $employee->contact = $request->contact;
        $employee->save();

        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employees::find($id);
        return view('crud/show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::find($id);
        return view('crud/edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employees::find($id);
        $employee->name = $request->name;
        $employee->salary = $request->salary;
        $employee->department = $request->department;
        $employee->address = $request->address;
        $employee->contact = $request->contact;
        $employee->dob = $request->dob;
        $employee->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Employees::destroy($request->id);
        return redirect('home');

    }
}
