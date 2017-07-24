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
        $blogpost = new BlogPost;

        $form = $this->createFormBuilder($blogpost) //création du formulaire
        ->add('title', TextType::class, array('label'=> 'Titre', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')) )
        ->add('body', TextareaType::class, array('label'=> 'Texte', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')) )
        ->add('save', SubmitType::class, array('label'=> 'Créer un article', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')) )

            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //récupérer les données
            $title = $form ['title']->getData();
            $body = $form ['body']->getData();

            $blogpost->setTitle($title);
            $blogpost->setbody($body);

            //récupérer l'entité
            $em = $this->getDoctrine()->getManager();

            //traite les nouvelles entités en base de données
            $em->persist($blogpost);

            $em->flush();

            $this->addFlash(
                'notice',
                'Article Ajouté!'
            );

            return $this->redirectToRoute('home'); //rediriger msg vers une page
        }

        return $this->render('blog/create_blog.html.twig', array(
            'form'=>$form->createView()
        ));
    }


    /**
     * @Route("/blog/edit", name="edit_blog_post")
     */
    public function editAction($id, Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('blog/edit_blog.html.twig');
    }


    /**
     * @Route("/blog/details/", name="details_blog_post")
     */
    public function detailsAction()
    {
        // replace this example code with whatever you need
        return $this->render('blog/details_blog.html.twig');
    }
        /**
     * @Route("/blog/nous", name="nous_blog_post")
     */
    public function nousAction()
    {
        // replace this example code with whatever you need
        return $this->render('blog/nous_blog.html.twig');
    }
     /**
     * @Route("/blog/contact", name="contact_blog_post")
     */
    public function contactAction()
    {
        // replace this example code with whatever you need
                return $this->render('blog/contact_blog.html.twig');
    }
}
