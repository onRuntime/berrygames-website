<?php

namespace App\Controller\Berryplus;

use App\Entity\Website\BerryPlusUser;
use App\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class BerryplusUsersController extends AbstractController
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @Route("/berryplus/berryplus/users/", name="berryplus.berryplus.users")
     */
    public function index()
    {
        $users = $this->getDoctrine()->getRepository(BerryPlusUser::class, 'website')->findAll();
        return $this->render('berrygames/berryplus/berryplus/users/users.html.twig', [
            'page_title' => 'Users',
            'users' => $users
        ]);
    }

    /**
     * @Route("/berryplus/berryplus/users/new", name="berryplus.berryplus.users.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $user = new BerryPlusUser();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('website');

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));
            $em->persist($user);
            $em->flush($user);
            $this->addFlash('success', 'Changes on ' . $user->getUsername() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.berryplus.users') . "#" . $user->getUsername());
        }

        return $this->render('berrygames/berryplus/berryplus/users/users_new.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/berryplus/users/edit/{user}", name="berryplus.berryplus.users.edit")
     * @param $user
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($user, Request $request)
    {
        $user = $this->getDoctrine()->getRepository(BerryPlusUser::class, 'website')->findOneBy(['username' => $user]);
        $em = $this->getDoctrine()->getManager('website');
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));

            $em->persist($user);
            $em->flush($user);
            $this->addFlash('success', 'Changes on ' . $user->getUsername() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.berryplus.users') . "#" . $user->getUsername());
        }

        return $this->render('berrygames/berryplus/berryplus/users/users_edit.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/berryplus/users/delete/{user}", name="berryplus.berryplus.users.delete")
     * @param $user
     * @return RedirectResponse
     */
    public function delete($user)
    {
        $user = $this->getDoctrine()->getRepository(BerryPlusUser::class, 'website')->findOneBy(['username' => $user]);
        $em = $this->getDoctrine()->getManager('website');
        $em->remove($user);
        $em->flush();
        $this->addFlash('success', 'The deletion of the user ' . $user->getUsername() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.berryplus.users');
    }

}