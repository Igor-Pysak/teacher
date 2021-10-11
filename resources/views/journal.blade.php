@extends('layouts.layout')
@section('title')Вибір семестру@endsection
@section ('content')
<div class="form-row text-center">
    <div class="col-12">
    <div class="btn-group" role="group">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Меню вибору семестру
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="/semester/1">1 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/2">2 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/3">3 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/4">4 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/5">5 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/6">6 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/7">7 Семестр</a></li>
          <li><a class="dropdown-item" href="/semester/8">8 Семестр</a></li>
        </ul>
    </div>
</div>
    </div>
    </div>
@endsection
