<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Comment;
use AppBundle\Form\ArticleType;
use AppBundle\Form\CommentType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

class ArticleController extends Controller
{
    /**
     * @param ArticleRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/article_list", name="article_list")
     */
    public function listArticleAction()
    {
        $repository =$this->getDoctrine()->getRepository(Article::class);
        $articles = $repository->findAll();
        return $this->render('article/list.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     * @Route ("/article_create", name="article_create")
     * @Route ("/article_edit/{id}", name="article_edit")
     */
    public function createArticleAction(Article $article = null, Request $request, UserInterface $user)
    {
        if(!$article) {
            $article = new Article();
        }

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $article->setCreatedAt(new \DateTime());
            $article->setAuthor($user->getUsername());

            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', ['id' => $article->getId()]);
        }

        return $this->render('article/create.html.twig', [
                'formArticle' => $form->createView(),
        ]);
    }

    /**
     * @param Article $article
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/article/{id}", name="article_show")
     */
    public function showArticleAction(Article $article, Request $request, UserInterface $user)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted()) {
            $comment->setCreatedAt(new \DateTime());
            $comment->setAuthor($user->getUsername());

            $em = $this->getDoctrine()->getManager(Comment::class);
            $em->persist($comment);
            $em->flush();

            return $this->redirect("article_show", ['id' => $article->getId()]);
        }

        return $this->render('article/show.html.twig', [
           'article' => $article,
           'commentForm' => $form->createView()
        ]);

        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @param Article $article
     * @Route ("/article_delete/{id}", name="article_delete")
     */
    public function deleteArticleAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();

        return $this->redirect($this->generateUrl('article_list'));
    }
}
