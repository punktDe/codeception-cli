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
     */
    public function iRunShellCommand($command)
    {
        $this->runShellCommand($command);
    }

    /**
     * @Given the exit status should be :status
     */
    public function theExitStatusShouldBe($status)
    {
        $this->seeResultCodeIs($status);
    }

}
