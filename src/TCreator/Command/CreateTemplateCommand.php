<?php

namespace TCreator\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
// file system
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

use Templates\Standard\Index as Content;

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
        $contents = Content::getText();
        // var_dump($contents);
        $output->writeln([
            '',
            'TCreator app',
            '-------------------------------',
            'create a new template.',
            ''
        ]);

        $output->writeln('File Name: ' . $input->getArgument('filename'));

        $fs = new Filesystem();

        try {
            // $fs->mkdir($input->getArgument('filename').'.php');
            // $fs->touch($input->getArgument('filename').'.php');
            $fs->dumpFile($input->getArgument('filename').'.php', $contents);

        } catch (Exception $e) {
            echo "An error occurred while creating your directory at ".$e->getPath();
        }
    }
}

?>