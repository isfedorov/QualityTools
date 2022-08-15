<?php

use Robo\Symfony\ConsoleIO;

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * @param $opts
     * @return void
     * @command greet
     */
    public function getHello(ConsoleIO $io, $opts = ['silent' => false])
    {
        $io->say("Hello, from Robo");
    }
}