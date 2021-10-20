@extends('layouts.layout')
@section('title')Новий учень@endsection
@section ('content')
<div class="row py-lg-5 ">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Додати Учня</h1>
<form method="post" action="{{ route('journal.store') }}">
{{ csrf_field() }}
<div class="login-form-1">
        <div class="login-form-main-message"></div>
        <div class="main-login-form">
            <div class="login-group">
                <div class="p-2">
                    <div class="form-group text-white">
                        <label for="name" class="sr-only">ПІБ</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ПІБ">
                    </div>
                </div>
            </div>
            <div class="p-2">
                <button class="col-4 btn btn-outline-info mr-3" type="submit">Додати</button>
            </div>
        </div>
</div>
</form>
</div>
</div>
@endsection
