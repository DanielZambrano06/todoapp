@extends('layouts.app')

@section('content')
<h1>Crear Nueva Tarea</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título:</label>
        <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción:</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label">Fecha de Vencimiento:</label>
        <input type="date" name="due_date" id="due_date" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Crear Tarea</button>
</form>
@endsection