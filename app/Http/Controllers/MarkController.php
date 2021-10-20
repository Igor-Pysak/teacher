<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mark;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $student_id)
    {
        $student_name = Student::find($student_id)->name;
        $marks = Mark::where('student_id',$student_id)->orderBy('id', 'DESC')->get();

        return view('student-marks', [
            'marks' => $marks,
            'student_name'=>$student_name,
            'student_id'=>$student_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$student_id)
    {
        $student = Student::find($student_id);
        if (!$student){
            return redirect()->back()->with('message','Такого студента не існує!');
        }

        return view('mark', [
            'student_name' => $student->name,
            'semesters' => Semester::all(),
            'student_id'=>$student_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$student_id)
    {
        $mark = new Mark();
        $mark->semester_id = $request->semester_id;
        $mark->student_id = $student_id;
        $mark->mark = $request->mark;
        $mark->save();

        return redirect()->back()->with('message','Оцінка була успішно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark  = Mark::find($id);
        return view('editmark', [
            'mark' => $mark,
        ]);
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
        $mark = Mark::find($id);
        $mark->mark = $request->mark;
        $mark->update();

        return redirect()->back()->with('message','Оцінка була успішно оновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = Mark::find($id);
        if ($mark) {
            $mark->delete();
        }
        return redirect()->back()->with('message','Оцінка була успішно видалена!');
    }
}
