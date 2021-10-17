<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $marks = Student::orderBy('created_at', 'DESC')->get();

        return view('mark', [
            'marks' => $marks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marks = Student::all();
        return view('mark', [
            'marks' => $marks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marks = new Student();
        $marks->semesters()->attach($marks->id, ['mark' => 999]);
        $marks->save();

        return redirect()->back()->withSuccess('Оцінка була успішно добавлена');
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
    public function edit(Student $mark)
    {
        return view('mark', [
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
    public function update(Request $request, Student $mark)
    {
        $mark->title = $request->title;
        $mark->save();

        return redirect()->back()->withSuccess('Оцінка була успішно оновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $mark)
    {
        $mark->delete();
        return redirect()->back()->withSuccess('Оцінка була успішно видалена!');
    }
}
