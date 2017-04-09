<?php

namespace Flagrow\Bazaar;

use Carbon\Carbon;
use Flarum\Database\AbstractModel;

class Task extends AbstractModel
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'bazaar_tasks';

    /**
     * Craft a task with basic values
     * @param string $command
     * @param string|null $package
     * @return static
     */
    public static function build($command, $package = null)
    {
        $task = new static;

        $task->command = $command;
        $task->package = $package;
        $task->created_at = Carbon::now();

        return $task;
    }
}
