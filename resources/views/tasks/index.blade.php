@extends('layouts.app') <!-- Extiende la plantilla base -->

@section('content')
<h1>Mis Tareas</h1>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Crear Nueva Tarea</a>

<ul class="list-group">
    @foreach ($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                <h5>{{ $task->title }}</h5>
                <p>{{ $task->description }}</p>
                <small>Fecha de vencimiento: {{ $task->due_date ?? 'Sin fecha' }}</small>
            </div>
            <div>
                @if (!$task->completed)
                    <form action="{{ route('tasks.complete', $task) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success btn-sm">Completar</button>
                    </form>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Editar</a>
                @endif
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>
@endsection