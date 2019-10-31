<?php

namespace App\Controller;

use App\Entity\Alimentation;
use App\Form\AlimentationType;
use App\Repository\AlimentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/alimentation")
 */
class AlimentationController extends AbstractController
{
    /**
     * @Route("/", name="alimentation_index", methods={"GET"})
     */
    public function index(AlimentationRepository $alimentationRepository): Response
    {
        return $this->render('alimentation/index.html.twig', [
            'alimentations' => $alimentationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="alimentation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $alimentation = new Alimentation();
        $form = $this->createForm(AlimentationType::class, $alimentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($alimentation);
            $entityManager->flush();

            return $this->redirectToRoute('alimentation_index');
        }

        return $this->render('alimentation/new.html.twig', [
            'alimentation' => $alimentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alimentation_show", methods={"GET"})
     */
    public function show(Alimentation $alimentation): Response
    {
        return $this->render('alimentation/show.html.twig', [
            'alimentation' => $alimentation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="alimentation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Alimentation $alimentation): Response
    {
        $form = $this->createForm(AlimentationType::class, $alimentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('alimentation_index');
        }

        return $this->render('alimentation/edit.html.twig', [
            'alimentation' => $alimentation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="alimentation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Alimentation $alimentation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alimentation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($alimentation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('alimentation_index');
    }
}
