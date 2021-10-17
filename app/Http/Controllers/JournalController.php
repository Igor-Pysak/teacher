<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Semester;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = \App\Models\Student::with('semesters')->get();
        //$student->semesters()->attach($student->id, ['mark' => 999]);
    return view('semester', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createusers');
    }
    public function mark()
    {
        return view('mark');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->id = request('id');
        $students->name = request('name');
        $students->save();
        return redirect('/semester');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semester = Semester::findOrFail($id);
        $student = Student::query()->findOrFail($id);
        return view('semester', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $students, $id)
    {
        $students->semesters()->attach($students->id);

        return view('semester', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $students)
    {
        $students->id = $request->id;
        $students->name = $request->name;
        $students->save();

        return redirect()->back()->withSuccess('Студент був успішно оновлений');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $students)
    {
        $students->delete();
        return redirect()->back()->withSuccess('Студент був успішно видалений');
    }
}
