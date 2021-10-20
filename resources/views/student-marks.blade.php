@extends('layouts.layout')
@section('title')Оцінкі студентів@endsection
@section ('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h2>{{ $student_name }} оцінкі</h2>
                    <br/>
                    <a href="{{ route('student.mark.create',$student_id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Додати Оцінку </a>
                </div>
                <div class="card-body p-0 bg-dark">
                    <table class="table table-dark projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th>
                                Семестр
                            </th>
                            <th>Оцінка</th>
                            <th style="width: 30%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($marks as $mark)
                            <tr>
                                <td>
                                    {{ $mark->id }}
                                </td>
                                <td>
                                    {{ $mark->semester->semester_name }}
                                </td>
                                <td>
                                    {{ $mark->mark }}
                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('student.mark.edit', $mark->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Змінити
                                    </a>
                                    <form action="{{ route('student.mark.destroy', $mark->id) }}" method="POST" style="display: inline-block">
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
