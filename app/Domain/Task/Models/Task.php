<?php

namespace Domain\Task\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Importando o ENUM TYPE
use Domain\Task\Enums\TaskStatus;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'task',
        'category',
        'status'
    ];

    public function getStatusAttribute($value)
    {
        return TaskStatus::status($value);
    }
}
