@extends('layouts.layout')
@section('title')Семестр@endsection
@section ('content')
<section class="content">
    <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark">
                    <a href="{{ route('journal.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Додати Студента </a>
                    <a href="{{ url('https://drive.google.com/drive/folders/1OcUqa_rJngXL5aW0gx6NA0y11FOjm_3H?usp=sharing') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Матеріали </a>
                    <a href="{{ url('chat') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Чат </a>
                </div>
                <div class="card-body p-0 bg-dark">
                  <table class="table table-dark projects">
                      <thead>
                          <tr>
                              <th style="width: 5%">
                                  ID
                              </th>
                              <th>
                                  ПІБ
                              </th>
                              <th>Оцінка</th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($students as $student)
                          <tr>
                            <td>
                                {{ $student['id'] }}
                            </td>
                            <td>
                                {{ $student['name'] }}
                            </td>
                              <td>
                                  <a href="{{ route('student-marks',$student['id']) }}" class="btn btn-primary">
                                      Переглянути
                                  </a>
                              </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('journal.edit', $student['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Змінити
                                </a>
                                <form action="{{ route('journal.destroy', $student['id']) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn" onclick="return confirm('Ви дійсно хочете видалити?')">
                                        <i class="fas fa-trash">
                                        </i>
                                        Видалити
                                    </button>
                                </form>
                            </td>
                        </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
