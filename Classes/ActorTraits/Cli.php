<?php
namespace PunktDe\Codeception\Cli\ActorTraits;

/*
 * This file is part of the PunktDe\Codeception-Cli package.
 *
 * This package is open source software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

trait Cli {

    /**
     * @Given I run shell command :command
     * @param string $command
     */
    public function iRunShellCommand(string $command): void
    {
        $this->runShellCommand($command);
    }

    /**
     * @Given the exit status should be :status
     * @param int $status
     */
    public function theExitStatusShouldBe(int $status): void
    {
        $this->seeResultCodeIs($status);
    }

}
