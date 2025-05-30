<?php

namespace App\Http\Controllers;

use app\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'nomor' => 'required',
            'nama' => 'required',
        ]);

        $employee = Employee::create([
            'nomor' => $request->nomor,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'talahir' => $request-> talahir,
            'created_on' => now()
        ]);

        return response()->json($employee, 201);
    }

    /**
     * Display the specified resource.
     */
    // find specific employee with id
    public function show(string $id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     // delete employee from database
    public function destroy(string $id)
    {
        //
        $employee = Employee::find($id);
        $employee -> update([
            'deleted_on' => now()
        ]);
        $employee -> delete();
        
        return response()->json(['message' => 'Deleted'], 200);
    }
}
