<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;


class UserController extends AbstractController
{

    public function __construct(private readonly UserRepository $userRepository)
    {
    }

    #[Route('/profile', name: 'user_profile')]
    public function profile(): Response
    {
        $user = $this->getUser();
        assert($user instanceof User);

        return $this->render('user/profil.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('profile/change-password', name: 'user_change_password', methods: ['GET', 'POST'])]
    public function changePassword(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager,
        Security $security,
    ): Response {

        $form = $this->createFormBuilder($user)
            ->add('currentPassword', PasswordType::class, [
                'constraints' => [
                    new UserPassword(),
                ],
                'label' => 'Current password',
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [
                    new NotBlank(),
                    new Length(
                        min: 6,
                        max: 128,
                    ),
                ],
                'first_options' => [
                    'hash_property_path' => 'password',
                    'label' => 'New password',
                ],
                'mapped' => false,
                'second_options' => [
                    'label' => 'New password confirm',
                ],
            ])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            // The logout method applies an automatic protection against CSRF attacks;
            // it's explicitly disabled here because the form already has a CSRF token validated.
            return $security->logout(validateCsrfToken: false) ?? $this->redirectToRoute('/profile');
        }

        return $this->render('user/change_password.html.twig', [
            'form' => $form,
        ]);
    }
}
