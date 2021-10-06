<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $marks = Mark::orderBy('created_at', 'DESC')->get();

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
        $marks = Mark::all();
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
        $marks = new Mark();
        $marks->string = request('mark1');
        $marks->string = request('mark2');
        $marks->string = request('mark3');
        $marks->string = request('mark4');
        $marks->string = request('mark5');
        $marks->string = request('mark6');
        $marks->string = request('mark7');
        $marks->string = request('mark8');
        $marks->string = request('mark9');
        $marks->string = request('mark10');
        $marks->string = request('semester_mark');
        $marks->save();

        return redirect()->back()->withSuccess('Оцінка була успішно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
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
    public function update(Request $request, Mark $mark)
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
    public function destroy(Mark $mark)
    {
        $mark->delete();
        return redirect()->back()->withSuccess('Оцінка була успішно видалена!');
    }
}
