<?php



namespace AppBundle\Controller;

//on commence par ajouter
use AppBundle\Entity\BlogPost;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function listAction()
    {
        $blogposts = $this->getDoctrine()
            ->getRepository('AppBundle:BlogPost') //récupère le dépot
            ->findAll(); //

        return $this->render('blog/index.html.twig', array(
            'blogpost' => $blogposts
        ));

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
