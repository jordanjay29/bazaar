<?php

namespace Flagrow\Bazaar\Jobs;

use Flagrow\Bazaar\Composer\ComposerCommand;
use Flagrow\Bazaar\Task;

class RemovePackage extends BasePackageJob
{
    /**
     * @inheritdoc
     */
    public function handleComposer(ComposerCommand $command, Task $task)
    {
        return $command->remove($task->package);
    }

    public static function launch($package)
    {
        $task = Task::build('install', $package);
        $task->save();
        static::launchJob($task);
    }
}