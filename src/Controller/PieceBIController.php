<?php

namespace App\Controller;

use App\Entity\PieceBI;
use App\Form\PieceBIType;
use App\Repository\PieceBIRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/piece/b/i")
 */
class PieceBIController extends AbstractController
{
    /**
     * @Route("/", name="piece_b_i_index", methods={"GET"})
     */
    public function index(PieceBIRepository $pieceBIRepository): Response
    {
        return $this->render('piece_bi/index.html.twig', [
            'piece_b_is' => $pieceBIRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="piece_b_i_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pieceBI = new PieceBI();
        $form = $this->createForm(PieceBIType::class, $pieceBI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pieceBI);
            $entityManager->flush();

            return $this->redirectToRoute('piece_b_i_index');
        }

        return $this->render('piece_bi/new.html.twig', [
            'piece_b_i' => $pieceBI,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_b_i_show", methods={"GET"})
     */
    public function show(PieceBI $pieceBI): Response
    {
        return $this->render('piece_bi/show.html.twig', [
            'piece_b_i' => $pieceBI,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="piece_b_i_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PieceBI $pieceBI): Response
    {
        $form = $this->createForm(PieceBIType::class, $pieceBI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('piece_b_i_index');
        }

        return $this->render('piece_bi/edit.html.twig', [
            'piece_b_i' => $pieceBI,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piece_b_i_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PieceBI $pieceBI): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pieceBI->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pieceBI);
            $entityManager->flush();
        }

        return $this->redirectToRoute('piece_b_i_index');
    }
}
