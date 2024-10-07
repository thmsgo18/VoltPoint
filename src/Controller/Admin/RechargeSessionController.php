<?php

namespace App\Controller\Admin;

use App\Data\AdminSessionFilter;
use App\Entity\SessionStatus\Status;
use App\Form\AdminSessionFilterForm;
use App\Repository\EvseRepository;
use App\Repository\RechargeSessionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class RechargeSessionController extends AbstractController
{
    public function __construct(private readonly RechargeSessionRepository $sessionRepository, private readonly EvseRepository $evseRepository)
    {
    }

    #[Route('/session', name: 'admin_recharge_session')]
    public function index(Request $request): Response
    {
        $filter = new AdminSessionFilter();
        $form = $this->createForm(AdminSessionFilterForm::class, $filter);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $filter = $form->getData();
            $sessions = $this->sessionRepository->adminFindByFilter($filter);

            return $this->render('admin/session.html.twig', ['sessions' => $sessions, 'form' => $form->createView()]);
        }

        $sessions=$this->sessionRepository->findAll();
        return $this->render('admin/session.html.twig', ['sessions' => $sessions, 'form' => $form->createView()]);
    }

    #[Route('/session/{sessionId}/stop', name: 'admin_stop_session')]
    public function stopSession(string $sessionId): Response
    {
        $session = $this->sessionRepository->findOneSession($sessionId);
        $evse = $session->getEvse();
        $evse->setDisponibility(1);
        $session->setStatus(Status::Stopped);
        $session->setStopedAt(new \DateTimeImmutable());
        $this->sessionRepository->save($session);
        return $this->redirectToRoute('admin_recharge_session');
    }
}
