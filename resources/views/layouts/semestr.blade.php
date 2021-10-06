@extends('layouts.layout')
@section('title')Електронний журнал@endsection
@section ('content')
<div class="table-responsive">
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ПІБ</th>
          <th scope="col">Тема 1</th>
          <th scope="col">Тема 2</th>
          <th scope="col">Тема 3</th>
          <th scope="col">Тема 4</th>
          <th scope="col">Тема 5</th>
          <th scope="col">Тема 6</th>
          <th scope="col">Тема 7</th>
          <th scope="col">Тема 8</th>
          <th scope="col">Тема 9</th>
          <th scope="col">Тема 10</th>
          <th scope="col">Семестровий контроль</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $singleStudent)
        <tr>
            <td>{{ $singleStudent->name}}</td>
            <td>{{ $singleStudent->mark1}}</td>
            <td>{{ $singleStudent->mark2}}</td>
            <td>{{ $singleStudent->mark3}}</td>
            <td>{{ $singleStudent->mark4}}</td>
            <td>{{ $singleStudent->mark5}}</td>
            <td>{{ $singleStudent->mark6}}</td>
            <td>{{ $singleStudent->mark7}}</td>
            <td>{{ $singleStudent->mark8}}</td>
            <td>{{ $singleStudent->mark9}}</td>
            <td>{{ $singleStudent->mark10}}</td>
            <td>{{ $singleStudent->semester}}</td>
        </tr>
      @endforeach
    </tbody>
</table>
<a class="col-3 btn btn-outline-info" href="/createusers">Додати Учня</a>
<a class="ml-4 btn btn-outline-info" href="/mark">Оцінювання</a>
@endsection
