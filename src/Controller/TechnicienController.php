<?php

namespace App\Controller;

use App\Entity\Technicien;
use App\Form\TechnicienType;
use App\Repository\TechnicienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/technicien")
 */
class TechnicienController extends AbstractController
{
    /**
     * @Route("/", name="technicien_index", methods={"GET"})
     */
    public function index(TechnicienRepository $technicienRepository): Response
    {
        return $this->render('technicien/index.html.twig', [
            'techniciens' => $technicienRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="technicien_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $technicien = new Technicien();
        $form = $this->createForm(TechnicienType::class, $technicien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($technicien);
            $entityManager->flush();

            return $this->redirectToRoute('technicien_index');
        }

        return $this->render('technicien/new.html.twig', [
            'technicien' => $technicien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="technicien_show", methods={"GET"})
     */
    public function show(Technicien $technicien): Response
    {
        return $this->render('technicien/show.html.twig', [
            'technicien' => $technicien,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="technicien_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Technicien $technicien): Response
    {
        $form = $this->createForm(TechnicienType::class, $technicien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('technicien_index');
        }

        return $this->render('technicien/edit.html.twig', [
            'technicien' => $technicien,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="technicien_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Technicien $technicien): Response
    {
        if ($this->isCsrfTokenValid('delete'.$technicien->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($technicien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('technicien_index');
    }
}
