<?php

use Robo\Symfony\ConsoleIO;
use Robo\Tasks;

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 */
class RoboFile extends Tasks
{
    /**
     * @param   $opts
     * @return  void
     * @command greet
     */
    public function getHello(ConsoleIO $io, $opts=['silent' => false])
    {
        $io->say("Hello, from Robo");
    }

    public function example(): void
    {
        $this->taskExec('php')
            ->args(['-v'])
            ->run();
    }
}
