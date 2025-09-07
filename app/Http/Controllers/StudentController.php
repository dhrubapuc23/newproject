<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudentRequest;

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
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|string|min:2|max:255',
        //     'email' => 'required|email',
        //     'semester' => 'required|numeric',
        // ],
        // [
        //     'name.required' => 'Name is required',
        //     'name.string' => 'Name must be string',
        //     'name.min' => 'Name must be at least 2 characters',
        //     'name.max' => 'Name must not exceed 255 characters',
        //     'email.required' => 'Email is required',
        //     'email.email' => 'Email must be a valid email address',
        //     'semester.required' => 'Semester is required',
        // ]);
        DB::table('students')->insert([
            'student_name' => $request->name,
            'email' => $request->email,
            'semester' => $request->semester,
        ]);
        //dd('Data inserted successfully');
        return redirect()->route('student.create')->with('success', 'Data inserted successfully');
    }

    public function getData()
    {
        $students = DB::table('students')->paginate(20);
        return view('show-students', ['students' => $students]);
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
