<?php declare(strict_types=1);

namespace BrbcodeTools\FixerBridgeCLI\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'fixer-bridge:fix')]
class FixerBridgeCLICommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Running...");
        return Command::SUCCESS;
    }

}