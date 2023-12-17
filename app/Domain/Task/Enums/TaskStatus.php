<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

// Essa classe extende a classe Enum da Lib PHP Enum
class TaskStatus extends Enum
{
    // Esses atributos representam os estados (status) que a tarefa pode ter
    private const COMPLETE = 'complete';
    private const INCOMPLETE = 'incomplete';

    public static function status($value): string
    {
        switch ($value) {
            case self::COMPLETE:
                return 'line-through';
            case self::INCOMPLETE:
                return 'none';
            default:
                return 'none';
        }
    }
}
