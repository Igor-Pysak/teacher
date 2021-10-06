@extends('layouts.layout')
@section('title')Оцінювання@endsection
@section ('content')
<div class="row py-lg-5 ">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light text-white">Оцінити учня</h1>
<form method="post" action="/journal">
{{ csrf_field() }}
<div class="login-form-1">
    <form id="login-form" class="text-left" novalidate="novalidate">
        <div class="login-form-main-message"></div>
        <div class="main-login-form">
            <div class="login-group">
                <div class="p-2">
                    <div class="form-group text-white">

                    </div>
                </div>
            </div>
            <div class="p-2">
    <button class="col-4 btn btn-outline-info mr-3" type="sumbit">Готово</button>
</div>
</form>
</div>
</div>
</div>
</section>
</p>
@endsection
