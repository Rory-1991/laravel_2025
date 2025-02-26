<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Running Database Queries
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello student index');
        // $data =[
        //     [
        //         'id' => 1,
        //         'name' => 'amy',
        //         'pet' => 'dog'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'bob',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'cat',
        //     ]
        //     ];
        // return view('student.index', ['data' => $data]);

        // $users = DB::table('users')->get();
        $data = DB::table('students')->get();
        // dd($data[0]->name);
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }

    public function excel()
    {
        dd('hello student controller excel');
    }

    public function sayHello()
    {
        dd('hello Roy');
    }
}
