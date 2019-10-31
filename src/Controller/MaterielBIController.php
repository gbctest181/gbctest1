<?php

namespace App\Controller;

use App\Entity\MaterielBI;
use App\Form\MaterielBIType;
use App\Repository\MaterielBIRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/materiel/b/i")
 */
class MaterielBIController extends AbstractController
{
    /**
     * @Route("/", name="materiel_b_i_index", methods={"GET"})
     */
    public function index(MaterielBIRepository $materielBIRepository): Response
    {
        return $this->render('materiel_bi/index.html.twig', [
            'materiel_b_is' => $materielBIRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="materiel_b_i_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $materielBI = new MaterielBI();
        $form = $this->createForm(MaterielBIType::class, $materielBI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($materielBI);
            $entityManager->flush();

            return $this->redirectToRoute('materiel_b_i_index');
        }

        return $this->render('materiel_bi/new.html.twig', [
            'materiel_b_i' => $materielBI,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materiel_b_i_show", methods={"GET"})
     */
    public function show(MaterielBI $materielBI): Response
    {
        return $this->render('materiel_bi/show.html.twig', [
            'materiel_b_i' => $materielBI,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="materiel_b_i_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MaterielBI $materielBI): Response
    {
        $form = $this->createForm(MaterielBIType::class, $materielBI);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('materiel_b_i_index');
        }

        return $this->render('materiel_bi/edit.html.twig', [
            'materiel_b_i' => $materielBI,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materiel_b_i_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MaterielBI $materielBI): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materielBI->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($materielBI);
            $entityManager->flush();
        }

        return $this->redirectToRoute('materiel_b_i_index');
    }
}
