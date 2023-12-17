<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;

// Importando Form request
use App\Web\Task\Requests\TaskRequest;

// Importando Model
use Domain\Task\Models\Task;

// Importando a Action
use Domain\Task\Actions\CreateTaskAction;

// Importando o DTO
use Domain\Task\DataTransferObjects\TaskData;

class TaskController extends Controller
{
    public function index()
    {
        // $tasks = app(Task::class)->get();
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }

    public function store(TaskRequest $taskRequest, CreateTaskAction $action)
    {
        // Passando a instância do form request para setar o DTO
        $data = TaskData::fromRequest($taskRequest);

        // Usando a action para criar o registro (lembrando que a action espera como parâmetro uma instância de TaskData)
        $action($data);

        // Retorno do controller
        return back()->with(['success' => 'Tarefa criada com sucesso!']);
    }
}
