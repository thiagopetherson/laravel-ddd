<?php

namespace Domain\Task\Actions;

// DTO
use Domain\Task\DataTransferObjects\TaskData;

// Model
use Domain\Task\Models\Task;

// A classe é "final" pois ela não terá valores modificados
final class CreateTaskAction
{
    // Usamos o invoke (que recebe como parâmetro o DTO)
    public function __invoke(TaskData $taskData): Task {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category
        ]);
    }
}
