<?php

namespace TCreator\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AboutCommand extends Command
{
    public function configure()
    {
        $this
            ->setName('about')
            ->setDescription('About.')
            ->setHelp('Check the credits.')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('-------------------------------');
        $output->writeln('TCreator app');
        $output->writeln('-------------------------------');
        $output->writeln('by Diego Almiron');
        $output->writeln('diegoalmesp@gmail.com');
        $output->writeln('GitHub: diegoalmesp');
        $output->writeln('-------------------------------');
    }
}

?>