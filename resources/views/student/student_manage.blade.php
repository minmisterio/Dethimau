@extends('layout.index')
@section('title',"all")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Student</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Create at</th>
                            <th>Update at</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->birthday }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->create_at }}</td>
                                <td>{{ $student->update_at }}</td>
                                <td>

                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning">EDIT</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
