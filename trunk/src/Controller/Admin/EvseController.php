<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Entity\Connector;
use App\Entity\Evse;
use App\Entity\Station;
use App\Repository\ConnectorRepository;
use App\Repository\EvseRepository;
use App\Repository\StationRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin')]
class EvseController extends AbstractController
{
    public function __construct(private readonly EvseRepository $evseRepository,
                                private readonly StationRepository $stationRepository,
                                private readonly ConnectorRepository $connectorRepository)
    {
    }

    #[Route('/stations/{stationId}/create', name: 'create_evse')]
    public function create(Request $request, string $stationId): Response
    {

        $evse = new Evse();

        $form = $this->createFormBuilder($evse)
            ->add('name', TextType::class)
            ->add('disponibility', CheckboxType::class, [
                'label' => 'Disponibility',
                'required' => false,
            ])
            ->add('connector1', EntityType::class, [
                'label' => 'First connector ',
                'class' => Connector::class,
                'choice_label' => 'name',
                /*'setter' => function (Evse $evse, Connector $connector1, FormInterface $form): void {
                    $evse->setConnector1FromEntity($connector1);
                }*/
            ])
            ->add('connector2', EntityType::class, [
                'label' => 'Second connector ',
                'class' => Connector::class,
                'choice_label' => 'name',
                /*'setter' => function (Evse $evse, Connector $connector2, FormInterface $form): void {
                    $evse->setConnector2FromEntity($connector2);
                }*/
            ])
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $evse = $form->getData();

            $station = $this->stationRepository->findOneBy(['id' => $stationId]);
            $evse->setStation($station);

            $this->evseRepository->save($evse);

            return $this->render('admin/add-evse.html.twig', ['evseId' => $evse->getId(), 'stationId' => $station->getId()]);
        }

        return $this->render('evse/evse-form.html.twig', ['form' => $form]);

    }

    /*#[Route('/connector/create', name: 'create_connector')]
    public function addConnector(Request $request): Response
    {
        $connector = new Connector();

        $form = $this->createFormBuilder($connector)
            ->add('name', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Enregistrer'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $connector = $form->getData();
            $this->connectorRepository->save($connector);
        }

        return $this->render('evse/connector-form.html.twig', ['form' => $form]);
    }*/
}