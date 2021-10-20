@extends('layouts.layout')
@section('title')Оцінювання@endsection
@section ('content')
<div class="row py-lg-5 ">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 style="color: white;">{{ $mark->student->name }} оцінки</h1>
        <br/>
        <form method="post" action="{{ route('student.mark.update',$mark->id) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
        <div class="login-form-1">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="p-2">
                            <div class="form-group text-white">
                                <label for="mark1" class="sr-only">Семестр</label>
                                <input type="text" class="form-control" value="{{ $mark->semester->semester_name }}" id="semester_name" name="semester_name" disabled>
                            </div>
                        </div>
                        <div class="p-2">
                            <div class="form-group text-white">
                                <label for="mark1" class="sr-only">Оцінка</label>
                                <input type="text" class="form-control" value="{{ $mark->mark }}" id="mark" name="mark" placeholder="Оцінка" required />
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
