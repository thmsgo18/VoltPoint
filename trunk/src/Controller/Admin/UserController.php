<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Data\AdminStationFilter;
use App\Data\UserFilter;
use App\Entity\Station;
use App\Form\AdminStationFilterForm;
use App\Form\FilterForm;
use App\Repository\StationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;

#[Route('/admin')]
class UserController extends AbstractController
{
    public function __construct(private readonly UserRepository $userRepository)
    {
    }
    #[Route('/list-user', name: 'admin_view_user')]
    public function getUsers(UserRepository $userRepository): Response
    {
        $users = $this->userRepository->getAllUsers();

        return $this->render('admin/list-user.html.twig', ['users' => $users]);


    }

}