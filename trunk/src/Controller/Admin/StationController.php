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

#[Route('/admin')]
class StationController extends AbstractController
{
    public function __construct(private readonly StationRepository $stationRepository)
    {
    }

    #[Route('/stations/create', name: 'create_station')]
    public function create(Request $request): Response
    {

        $station = new Station();

        $form = $this->createFormBuilder($station)
            ->add('name', TextType::class)
            ->add('city', TextType::class)
            ->add('postal', TextType::class)
            ->add('street', TextType::class)
            ->add('latitude', TextType::class)
            ->add('longitude', TextType::class)
            ->add('longitude', TextType::class)
            ->add('prix', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $station = $form->getData();
            $this->stationRepository->save($station);

            return $this->render('admin/add_confirmed.html.twig', ['stationId' => $station->getId()]);
        }

        return $this->render('admin/AjoutStation.html.twig', ['form' => $form]);

    }

    #[Route('/stations', name: 'admin_view_stations', methods: ['GET'])]
    public function getStations(Request $request): Response
    {
        $filter = new AdminStationFilter();
        $form = $this->createForm(AdminStationFilterForm::class, $filter);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $filter = $form->getData();
            $stations = $this->stationRepository->adminFindByFilter($filter);

            return $this->render('admin/stations.html.twig', ['stations' => $stations, 'form' => $form->createView()]);
        }
        $stations = $this->stationRepository->getAllStation();
        return $this->render('admin/stations.html.twig', ['stations' => $stations, 'form' => $form->createView()]);
    }
    #[Route('/stations/{stationId}', name: 'admin_info_station')]
    public function getStationEvses(string $stationId): Response
    {
        $station = $this->stationRepository->findOneStation($stationId);
        $evses = $station->getEvses();
        return $this->render('admin/evse.html.twig', ['station'=>$station,'evses' => $evses]);
    }
}