<?php

namespace App\Controller;

use App\Entity\ProcesVerbal;
use App\Form\ProcesVerbalType;
use App\Repository\ProcesVerbalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/proces/verbal")
 */
class ProcesVerbalController extends AbstractController
{
    /**
     * @Route("/", name="proces_verbal_index", methods={"GET"})
     */
    public function index(ProcesVerbalRepository $procesVerbalRepository): Response
    {
        return $this->render('proces_verbal/index.html.twig', [
            'proces_verbals' => $procesVerbalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="proces_verbal_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $procesVerbal = new ProcesVerbal();
        $form = $this->createForm(ProcesVerbalType::class, $procesVerbal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($procesVerbal);
            $entityManager->flush();

            return $this->redirectToRoute('proces_verbal_index');
        }

        return $this->render('proces_verbal/new.html.twig', [
            'proces_verbal' => $procesVerbal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="proces_verbal_show", methods={"GET"})
     */
    public function show(ProcesVerbal $procesVerbal): Response
    {
        return $this->render('proces_verbal/show.html.twig', [
            'proces_verbal' => $procesVerbal,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="proces_verbal_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProcesVerbal $procesVerbal): Response
    {
        $form = $this->createForm(ProcesVerbalType::class, $procesVerbal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('proces_verbal_index');
        }

        return $this->render('proces_verbal/edit.html.twig', [
            'proces_verbal' => $procesVerbal,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="proces_verbal_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ProcesVerbal $procesVerbal): Response
    {
        if ($this->isCsrfTokenValid('delete'.$procesVerbal->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($procesVerbal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('proces_verbal_index');
    }
}
