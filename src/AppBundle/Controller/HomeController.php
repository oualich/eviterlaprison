<?php



namespace AppBundle\Controller;

//on commence par ajouter
use AppBundle\Entity\BlogPost;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function listAction()
    {
        $blogposts = $this->getDoctrine()
            ->getRepository('AppBundle:BlogPost') //récupère le dépot
            ->findBy(array(), null, 2, null); //

        return $this->render('home/home.html.twig', array(
            'blogpost' => $blogposts
        ));

    }
}
