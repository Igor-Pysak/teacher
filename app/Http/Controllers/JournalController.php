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
    public function edit(Request $request, $id)
    {
        $student = Student::find($id);
        return view('edituser', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student_exists = Student::where('name',$request->name)->where('id','!=',$id)->exists();
        if ($student_exists){
            return redirect()->back()->with('message','Студент уже існує!');
        }

        $student = Student::find($id);
        $student->name = $request->name;
        $student->update();

        return redirect()->back()->with('message','Студент був успішно оновлений');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->back()->with('message','Студент був успішно видалений');
        }

        return redirect()->back()->with('message','Помилка видалення, Студент не знайдений');
    }
}
