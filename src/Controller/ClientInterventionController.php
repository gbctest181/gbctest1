<?php

namespace App\Controller;

use App\Entity\ClientIntervention;
use App\Form\ClientInterventionType;
use App\Repository\ClientInterventionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/client/intervention")
 */
class ClientInterventionController extends AbstractController
{
    /**
     * @Route("/", name="client_intervention_index", methods={"GET"})
     */
    public function index(ClientInterventionRepository $clientInterventionRepository): Response
    {
        return $this->render('client_intervention/index.html.twig', [
            'client_interventions' => $clientInterventionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="client_intervention_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $clientIntervention = new ClientIntervention();
        $form = $this->createForm(ClientInterventionType::class, $clientIntervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clientIntervention);
            $entityManager->flush();

            return $this->redirectToRoute('client_intervention_index');
        }

        return $this->render('client_intervention/new.html.twig', [
            'client_intervention' => $clientIntervention,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="client_intervention_show", methods={"GET"})
     */
    public function show(ClientIntervention $clientIntervention): Response
    {
        return $this->render('client_intervention/show.html.twig', [
            'client_intervention' => $clientIntervention,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="client_intervention_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ClientIntervention $clientIntervention): Response
    {
        $form = $this->createForm(ClientInterventionType::class, $clientIntervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('client_intervention_index');
        }

        return $this->render('client_intervention/edit.html.twig', [
            'client_intervention' => $clientIntervention,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="client_intervention_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClientIntervention $clientIntervention): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientIntervention->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clientIntervention);
            $entityManager->flush();
        }

        return $this->redirectToRoute('client_intervention_index');
    }
}
