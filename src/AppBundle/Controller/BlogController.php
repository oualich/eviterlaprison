<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="home")
     */
    public function listAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);

    }


    /**
     * @Route("/blog/create", name="create_blog_post")
     */
    public function createAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('blog/create_blog.html.twig');
    }


    /**
     * @Route("/blog/edit/{id}", name="edit_blog_post")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('blog/edit_blog.html.twig');
    }


    /**
     * @Route("/blog/details/{id}", name="details_blog_post")
     */
    public function detailsAction($id)
    {
        // replace this example code with whatever you need
        return $this->render('blog/details_blog.html.twig');
    }
}
