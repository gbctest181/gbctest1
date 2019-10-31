<?php

namespace App\Controller;

use App\Entity\MaterielVE;
use App\Form\MaterielVEType;
use App\Repository\MaterielVERepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/materiel/v/e")
 */
class MaterielVEController extends AbstractController
{
    /**
     * @Route("/", name="materiel_v_e_index", methods={"GET"})
     */
    public function index(MaterielVERepository $materielVERepository): Response
    {
        return $this->render('materiel_ve/index.html.twig', [
            'materiel_v_es' => $materielVERepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="materiel_v_e_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $materielVE = new MaterielVE();
        $form = $this->createForm(MaterielVEType::class, $materielVE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($materielVE);
            $entityManager->flush();

            return $this->redirectToRoute('materiel_v_e_index');
        }

        return $this->render('materiel_ve/new.html.twig', [
            'materiel_v_e' => $materielVE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materiel_v_e_show", methods={"GET"})
     */
    public function show(MaterielVE $materielVE): Response
    {
        return $this->render('materiel_ve/show.html.twig', [
            'materiel_v_e' => $materielVE,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="materiel_v_e_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MaterielVE $materielVE): Response
    {
        $form = $this->createForm(MaterielVEType::class, $materielVE);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('materiel_v_e_index');
        }

        return $this->render('materiel_ve/edit.html.twig', [
            'materiel_v_e' => $materielVE,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="materiel_v_e_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MaterielVE $materielVE): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materielVE->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($materielVE);
            $entityManager->flush();
        }

        return $this->redirectToRoute('materiel_v_e_index');
    }
}
