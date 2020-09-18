<?php

namespace App\Controller\Berryplus\Minecraft;

use App\Entity\Berrygames\Translations;
use App\Form\TranslationsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TranslationsController extends AbstractController
{

    /**
     * @Route("/berryplus/minecraft/translations/", name="berryplus.minecraft.translations")
     */
    public function index()
    {
        $i18n = $this->getDoctrine()->getRepository(Translations::class, 'berrygames')->findAll();
        return $this->render('berrygames/berryplus/minecraft/translations/translations.html.twig', [
            'page_title' => 'Translations',
            'i18n' => $i18n
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/translations/new", name="berryplus.minecraft.translations.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $key = new Translations();

        $form = $this->createForm(TranslationsType::class, $key);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('berrygames');

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($key);
            $em->flush($key);
            $this->addFlash('success', 'Changes on ' . $key->getI18n() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.translations') . "#" . $key->getI18n());
        }

        return $this->render('berrygames/berryplus/minecraft/translations/translations_new.html.twig', [
            'key' => $key,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/translations/edit/{key}", name="berryplus.minecraft.translations.edit")
     * @param $key
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($key, Request $request)
    {
        $key = $this->getDoctrine()->getRepository(Translations::class, 'berrygames')->findOneBy(['i18n' => $key]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $form = $this->createForm(TranslationsType::class, $key);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($key);
            $em->flush($key);
            $this->addFlash('success', 'Changes on ' . $key->getI18n() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.translations') . "#" . $key->getI18n());
        }

        return $this->render('berrygames/berryplus/minecraft/translations/translations_edit.html.twig', [
            'key' => $key,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/translation/delete/{key}", name="berryplus.minecraft.translations.delete")
     * @param $key
     * @return RedirectResponse
     */
    public function delete($key)
    {
        $key = $this->getDoctrine()->getRepository(Translations::class, 'berrygames')->findOneBy(['i18n' => $key]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $em->remove($key);
        $em->flush();
        $this->addFlash('success', 'The deletion of the key ' . $key->getI18n() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.minecraft.translations');
    }

}