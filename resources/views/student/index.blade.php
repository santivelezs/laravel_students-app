@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de nacimiento</th>
                <th>Promedio</th>
                <th>Fecha De Creacion</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->birthdate }}</td>
                <td>{{ $student->grade }}</td>
                <td>{{ $student->created_at }}</td>
            </tr>
        @empty
            <p>No Students</p>
        @endforelse
        </tbody>
    </table>
</div>
@endsection