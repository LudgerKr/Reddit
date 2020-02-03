<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\CategoryType;
use AppBundle\Repository\CategoryRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{

    /**
     * @param CategoryRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/category_list", name="category_list")
     */
    public function listCategoryAction(CategoryRepository $repository)
    {
        $categories = $repository->findAll();
        return $this->render('categorie/list.html.twig', [
            'controller_name' => 'CategoryController',
            'categories' => $categories,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/category_create", name="category_create")
     */
    public function createCategoryAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirect('/category_list');
        }

        return $this->render('category/create.html.twig', [
            'formCategory' => $form->createView(),
        ]);
    }
}
