@extends('layouts.app')

@section('content')
<h1>Editar Tarea</h1>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Título:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción:</label>
        <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label">Fecha de Vencimiento:</label>
        <input type="date" name="due_date" id="due_date" class="form-control" value="{{ $task->due_date }}">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
</form>
@endsection