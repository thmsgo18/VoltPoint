<?php

namespace App\Controller;

use App\Entity\RechargeSession;
use App\Entity\SessionStatus\Status;
use App\Repository\EvseRepository;
use App\Repository\RechargeSessionRepository;
use Doctrine\Common\Collections\Criteria;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\SecurityBundle\Security;

class RechargeSessionController extends AbstractController
{
    public function __construct(private readonly RechargeSessionRepository $sessionRepository,
                                private readonly EvseRepository $evseRepository,
                                private Security $security)
    {
    }

    #[Route('/session', name: 'app_recharge_session')]
    public function index(): Response
    {
        $user = $this->security->getUser();
        $session = $this->sessionRepository->findOneBy(['user' => $user, 'status' => array(Status::InProgress, Status::Paused)]);
        if ($session == null ) {
            return $this->render('recharge_session/no-session.html.twig');
        }
        return $this->render('recharge_session/session.html.twig', ['session' => $session, 'battery_level' => $_SESSION['battery_level'] ?? 0]);
    }

    #[Route('/session/history', name: 'app_sessions_history')]
    public function history(): Response
    {
        $user = $this->security->getUser();

        $criteria = Criteria::create()
            ->andWhere(Criteria::expr()->eq('user', $user))
            ->orderBy(['createdAt' => 'DESC']);
        $sessions = $this->sessionRepository->matching($criteria);

        return $this->render('recharge_session/history.html.twig', [
            'sessions' => $sessions
        ]);
    }

    #[Route('/session/{evseId}/start', name: 'run_session')]
    public function startSession(string $evseId): Response
    {
        $evse = $this->evseRepository->findOneEvse($evseId);
        $session = new RechargeSession();
        $session->setEvse($evse);
        $session->setUser($this->getUser());
        $evse->setDisponibility(0);
        $_SESSION['battery_level'] = rand(0, 100);
        $this->sessionRepository->save($session);
        return $this->redirectToRoute('app_recharge_session');
    }

    #[Route('/session/{sessionId}/stop', name: 'stop_session')]
    public function stopSession(string $sessionId): Response
    {
        $session = $this->sessionRepository->findOneSession($sessionId);
        $evse = $session->getEvse();
        $station = $evse->getStation();
        $evse->setDisponibility(1);
        $session->setStatus(Status::Stopped);
        $session->setStopedAt(new \DateTimeImmutable());
        $duree=$session->getStopedAt()->diff($session->getCreatedAt());
        $totalMinutes = ($duree->h * 60) + $duree->i;
        $session->setPrice($station->getPrix()*$totalMinutes);
        $this->sessionRepository->save($session);
        return $this->redirectToRoute('app_recharge_session');
    }

    #[Route('/session/{sessionId}/pause', name: 'pause_session')]
    public function pauseSession(string $sessionId): Response
    {
        $session = $this->sessionRepository->findOneSession($sessionId);
        $evse = $session->getEvse();
        $session->setStatus(Status::Paused);
        $this->sessionRepository->save($session);
        return $this->redirectToRoute('app_recharge_session');
    }

    #[Route('/session/{sessionId}/resume', name: 'resume_session')]
    public function resumeSession(string $sessionId): Response
    {
        $session = $this->sessionRepository->findOneSession($sessionId);
        $evse = $session->getEvse();
        $session->setStatus(Status::InProgress);
        $this->sessionRepository->save($session);
        return $this->redirectToRoute('app_recharge_session');
    }
}
