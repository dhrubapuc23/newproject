<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$students = DB::table('students')->get();
        //$students = DB::table('students')->where('student_name','John Doe')->value('email');
        //$students = DB::table('students')->find(3);
        $students = DB::table('students')->pluck('student_name', 'email');
        dd($students);
    }

    public function getCourse()
    {
        $users = DB::table('students')
                ->join('courses', 'students.id', '=', 'courses.student_id')
                ->select('students.id','students.student_name', 'courses.course_name', 'courses.course_code')
                ->get();

        dd($users);
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
}
