<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Location;


class EmployeeController extends Controller
{
    public function index() {

      $emps = Employee::all();
      return view('home', compact('emps'));
    }

    public function show($id) {

      $emp = Employee::findOrFail($id);
      $loc = Location::all();
      return view('employeeShow', compact('emp', 'loc'));
    }

    public function create() {

      $locs = Location::all();
      return view('employeeForm', compact('locs'));
    }

    public function store(Request $request) {

      $data = $request -> all();
      Employee::create($data);
      return redirect() -> route ('home');
    }

    public function destroy($id) {

      $emp = Employee::findOrFail($id);
      $emp -> delete();
      return redirect() -> route ('home');
    }

    public function edit($id) {

      $emp = Employee::findOrFail($id);
      $locs = Location::all();
      return view('employeeEdit', compact('emp', 'locs'));
    }

    public function update($id, Request $request) {

      $data = $request -> all();
      $emp = Employee::findOrFail($id);
      $emp -> update($data);
      return redirect() -> route ('home');
    }
}
