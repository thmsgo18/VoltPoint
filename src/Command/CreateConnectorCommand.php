<?php

namespace App\Command;

use App\Entity\Connector;
use App\Repository\ConnectorRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;

#[AsCommand(name: 'app:create-connector')]
class CreateConnectorCommand extends Command
{
    public function __construct(private ConnectorRepository $connectorRepository)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $connector = new Connector();
        $connector->setName($input->getArgument('name'));
        $this->connectorRepository->save($connector);

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('name')
            // the command description shown when running "php bin/console list"
            ->setDescription('Creates a new connector.')
            // the command help shown when running the command with the "--help" option
            ->setHelp('This command allows you to create connector...')
        ;
    }
}