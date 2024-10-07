<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(name: 'app:create-admin')]
class CreateAdminCommand extends Command
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasher, private UserRepository $userRepository)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = new User();
        $user->setAdminRole();
        $password = $input->getArgument('password');
        $email = $input->getArgument('email');
        $lastname = $input->getArgument('lastname');
        $name = $input->getArgument('name');
        $user->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user,
                $password
            )
        );
        $user->setEmail($email);
        $user->setName($name);
        $user->setLastname($lastname);
        $this->userRepository->save($user);

        return Command::SUCCESS;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('lastname')
            ->addArgument('name')
            ->addArgument('email')
            ->addArgument('password')
            // the command description shown when running "php bin/console list"
            ->setDescription('Creates a new admin.')
            // the command help shown when running the command with the "--help" option
            ->setHelp('This command allows you to create admin...')
        ;
    }
}