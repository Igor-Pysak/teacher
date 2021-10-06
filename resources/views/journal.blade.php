@extends('layouts.layout')
@section('title')Вибір семестру@endsection
@section ('content')
<div class="row py-lg-5 col-lg-6 col-md-8 mx-auto">
    <div class="btn-group" role="group">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Меню вибору семестру
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">1 Семестр</a></li>
          <li><a class="dropdown-item" href="#">2 Семестр</a></li>
          <li><a class="dropdown-item" href="#">3 Семестр</a></li>
          <li><a class="dropdown-item" href="#">4 Семестр</a></li>
          <li><a class="dropdown-item" href="#">5 Семестр</a></li>
          <li><a class="dropdown-item" href="#">6 Семестр</a></li>
          <li><a class="dropdown-item" href="#">7 Семестр</a></li>
          <li><a class="dropdown-item" href="#">8 Семестр</a></li>
        </ul>
    </div>
    </div>
    </div>
@endsection
