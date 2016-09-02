<?php

namespace TCreator\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreateTemplateCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('template:create')
            ->setDescription('Create a new template.')
            ->setHelp('This command will ask a series of questions to create a new template.')
            // arguments
            ->addArgument('filename', InputArgument::REQUIRED, 'The name of the template file.')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            '',
            'TCreator app',
            '-------------------------------',
            'create a new template.',
            ''
        ]);

        $output->writeln('File Name: ' . $input->getArgument('filename'));
    }
}

?>