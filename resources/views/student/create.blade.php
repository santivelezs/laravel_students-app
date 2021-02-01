@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="form-group">
            <label for="firstname">Nombres</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
          </div>
          <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
          </div>
          <div class="form-group">
            <label for="birthdate">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate">
          </div>
          <div class="form-group">
            <label for="grade">Promedio</label>
            <input type="text" class="form-control" id="grade" name="grade">
          </div>
          <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection