<?php

namespace Domain\Task\DataTransferObjects;

// Biblioteca da spatie de tipagem
use Spatie\DataTransferObject\DataTransferObject;

// Importando Form Request
use App\Web\Task\Requests\TaskRequest;

class TaskData extends DataTransferObject
{
    /** @var string */
    public $task;

    /** @var string */
    public $category;

    public static function fromRequest(TaskRequest $taskRequest): TaskData
    {
        return new Self([
            'task' => $taskRequest['task'],
            'category' => $taskRequest['category']
        ]);
    }
}
