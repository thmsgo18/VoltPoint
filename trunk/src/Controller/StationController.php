<?php

declare(strict_types=1);

namespace App\Controller;

use App\Data\UserFilter;
use App\Form\FilterForm;
use App\Repository\StationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StationController extends AbstractController
{
    public function __construct(private readonly StationRepository $stationRepository, private readonly Security $security)
    {
    }

    #[Route('/')]
    public function index(): Response
    {
        return $this->redirectToRoute('view_stations');
    }

    #[Route('/stations', name: 'view_stations', methods: ['GET'])]
    public function getStations(Request $request): Response
    {
        $filter = new UserFilter();
        $form = $this->createForm(FilterForm::class, $filter);
        $user = $this->getUser();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $filter = $form->getData();
            $stations = $this->stationRepository->findByFilter($filter, $user);

            return $this->render('station/list.html.twig', ['stations' => $stations, 'form' => $form->createView()]);
        }
        $stations = $this->stationRepository->getAllStation();
        return $this->render('station/list.html.twig', ['stations' => $stations, 'form' => $form->createView()]);
    }

    #[Route('/stations/map', name: 'view_map')]
    public function viewMap(): Response
    {
        $stations = $this->stationRepository->findAll();
        return $this->render('station/map.html.twig',['stations'=>$stations]);
    }
    #[Route('/stations/{stationId}', name: 'info_station')]
    public function getStationEvses(string $stationId): Response
    {
        $station = $this->stationRepository->findOneStation($stationId);
        $evses = $station->getEvses();
        return $this->render('evse/index.html.twig', ['evses' => $evses, 'station' => $station]);
    }

}