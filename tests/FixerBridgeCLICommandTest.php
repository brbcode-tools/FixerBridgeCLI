<?php declare(strict_types=1);

namespace BrbcodeTools\FixerBridgeCLI\Tests;

use BrbcodeTools\FixerBridgeCLI\Command\FixerBridgeCLICommand;
use Symfony\Component\Console\Tester\CommandTester;
use PHPUnit\Framework\TestCase;

class FixerBridgeCLICommandTest extends TestCase
{
    public function testExecute(): void
    {
        // Create a command tester
        $command = new FixerBridgeCLICommand();
        $tester = new CommandTester($command);

        // Execute the command
        $tester->execute([]);

        // Assert the output
        $this->assertEquals("Running...\n", $tester->getDisplay());
    }
}