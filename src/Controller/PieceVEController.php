<?php

namespace App\Controller;

use App\Entity\PieceVE;
use App\Form\PieceVEType;
use App\Repository\PieceVERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/piece/v/e")
 */
class PieceVEController extends AbstractController
{
    /**
     * @Route("/", name="piece_v_e_index", methods={"GET"})
     */
    public function index(PieceVERepository $pieceVERepository): Response
    {
        return $this->render('piece_ve/index.html.twig', [
            'piece_v_es' => $pieceVERepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="piece_v_e_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pieceVE = new PieceVE();
        $form = $this->createForm(PieceVEType::class, $pieceVE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pieceVE);
            $entityManager->flush();

            return $this->redirectToRoute('piece_v_e_index');
        }

        return $this->render('piece_ve/new.html.twig', [
            'piece_v_e' => $pieceVE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_v_e_show", methods={"GET"})
     */
    public function show(PieceVE $pieceVE): Response
    {
        return $this->render('piece_ve/show.html.twig', [
            'piece_v_e' => $pieceVE,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="piece_v_e_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PieceVE $pieceVE): Response
    {
        $form = $this->createForm(PieceVEType::class, $pieceVE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('piece_v_e_index');
        }

        return $this->render('piece_ve/edit.html.twig', [
            'piece_v_e' => $pieceVE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_v_e_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PieceVE $pieceVE): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pieceVE->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pieceVE);
            $entityManager->flush();
        }

        return $this->redirectToRoute('piece_v_e_index');
    }
}
