<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProfileType;
use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use AppBundle\Helper\Auth;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
        return $this->render(
            'security/signupeditprofile.html.twig',[
            'formUser' => $form->createView()]);
    }

    /**
     * @Route("/signup", name="signup")
     * @Route("/profile/edit/{id}", name="profile_edit")
     */
    public function signUpEditProfileAction(User $user = null, Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if(!$user) {
            $user = new User();
            $form = $this->createForm(UserType::class, $user);
        } else {
            $form = $this->createForm(ProfileType::class, $user);
        }
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('home');
        }

        return $this->render('security/signupeditprofile.html.twig',[
            'formUser' => $form->createView(),
            'editMode' => $user->getId() !== null
        ]);

    }

    /**
     * @Route("/profile/{id}", name="profile")
     */
    public function getProfileAction(Request $request, User $user)
    {
        $id = $user->getId();
        $repository = $this->getDoctrine()->getRepository(User::class);
        $profile = $repository->findOneBy(['id' => $id]);

        return $this->render('security/show.html.twig', [
            'id' => $id,
            'user' => $profile
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        session_destroy();
        return $this->redirectToRoute('home');
    }

}