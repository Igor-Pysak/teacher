@extends('layouts.layout')
@section('title')Семестр@endsection
@section ('content')
<section class="content">
    <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 5%">
                                  ID
                              </th>
                              <th>
                                  ПІБ
                              </th>
                              <th style="width: 30%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($students as $student)
                          <tr>
                            <td>
                                {{ $student ['id'] }}
                            </td>
                            <td>
                                {{ $student ['name'] }}
                            </td>

                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route('journal.edit', $student ['id']) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <form action="{{ route('journal.destroy', $student ['id']) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
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
