<?php

namespace App\Controller\Berryplus\Minecraft;

use App\Entity\Berrygames\Ranks;
use App\Form\RanksType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class RanksController extends AbstractController
{

    /**
     * @Route("/berryplus/minecraft/ranks/", name="berryplus.minecraft.ranks")
     */
    public function index()
    {
        $ranks = $this->getDoctrine()->getRepository(Ranks::class, 'berrygames')->findAll();
        return $this->render('berrygames/berryplus/minecraft/ranks/ranks.html.twig', [
            'page_title' => 'Ranks',
            'ranks' => $ranks
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/ranks/new", name="berryplus.minecraft.ranks.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $rank = new Ranks();

        $form = $this->createForm(RanksType::class, $rank);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('berrygames');

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($rank);
            $em->flush($rank);
            $this->addFlash('success', 'Changes on ' . $rank->getRankid() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.ranks') . "#" . $rank->getRankid());
        }

        return $this->render('berrygames/berryplus/minecraft/ranks/ranks_new.html.twig', [
            'rank' => $rank,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/ranks/edit/{rank}", name="berryplus.minecraft.ranks.edit")
     * @param $rank
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($rank, Request $request)
    {
        $rank = $this->getDoctrine()->getRepository(Ranks::class, 'berrygames')->findOneBy(['rankid' => $rank]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $form = $this->createForm(RanksType::class, $rank);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($rank);
            $em->flush($rank);
            $this->addFlash('success', 'Changes on ' . $rank->getRankid() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.ranks') . "#" . $rank->getRankid());
        }

        return $this->render('berrygames/berryplus/minecraft/ranks/ranks_edit.html.twig', [
            'rank' => $rank,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/ranks/delete/{rank}", name="berryplus.minecraft.ranks.delete")
     * @param $rank
     * @return RedirectResponse
     */
    public function delete($rank)
    {
        $rank = $this->getDoctrine()->getRepository(Ranks::class, 'berrygames')->findOneBy(['i18n' => $rank]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $em->remove($rank);
        $em->flush();
        $this->addFlash('success', 'The deletion of the rank ' . $rank->getRankid() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.minecraft.ranks');
    }

}