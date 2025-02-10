<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener las tareas del usuario autenticado
    $tasks = auth()->user()->tasks;
    
    // Pasar las tareas a la vista
    return view('tasks.index', compact('tasks'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            // Validar los datos del formulario
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'due_date' => 'nullable|date',
            ]);
        
            // Crear la tarea asociada al usuario autenticado
            auth()->user()->tasks()->create($request->all());
        
            // Redirigir a la lista de tareas
            return redirect()->route('tasks.index');
        }
    }
    public function complete(Task $task)
    {
    // Verificar que la tarea pertenezca al usuario autenticado
    if ($task->user_id === auth()->id()) {
        $task->update(['completed' => true]);
    }

    // Redirigir a la lista de tareas
    return redirect()->route('tasks.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
    // Verificar que la tarea pertenezca al usuario autenticado
    if ($task->user_id === auth()->id()) {
        $task->delete();
    }

    // Redirigir a la lista de tareas
    return redirect()->route('tasks.index');
    }
}
