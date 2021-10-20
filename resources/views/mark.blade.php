@extends('layouts.layout')
@section('title')Оцінювання@endsection
@section ('content')
<div class="row py-lg-5 ">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 style="color: white;">{{ $student_name }} оцінка</h1>
        <br/>
        <form method="post" action="{{ route('student.mark.create',$student_id) }}">
        {{ csrf_field() }}
        <div class="login-form-1">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="p-2">
                            <div class="form-group text-white">
                                <label for="mark1" class="sr-only">Семестр</label>
                                <select name="semester_id" class="form-control" required>
                                    <option value="">--Вибір--</option>
                                    @foreach($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->semester_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="form-group text-white">
                                <label for="mark1" class="sr-only">Оцінка</label>
                                <input type="text" class="form-control" value="" id="mark" name="mark" placeholder="Оцінка" required />
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <button class="col-4 btn btn-outline-info mr-3" type="submit">Готово</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
@endsection
