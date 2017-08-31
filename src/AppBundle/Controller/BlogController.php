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
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use AppBundle\Entity\Contact;



class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function listAction(Request $request)
    {

        $blogpost = new BlogPost;

        $form = $this->createFormBuilder($blogpost) //création du formulaire
        ->add('category') 
        ->add('save', SubmitType::class, array('label'=> 'Filtrer') )

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
                    //récupérer les données
            $category = $form['category']->getData(); 

            $em = $this->getDoctrine()->getManager();

            $query = $em->createQuery('SELECT u FROM AppBundle\Entity\BlogPost u WHERE u.category = :category')
                ->setParameter('category', $category);
            
            $blogposts = $query->getResult(); 

        } else {
            $blogposts = $this->getDoctrine()
            ->getRepository('AppBundle:BlogPost') //récupère le dépot
            ->findAll(); //
        }

        // Render blog template
        return $this->render('blog/blog.html.twig', array(
            'blogpost' => $blogposts, 'form' => $form->createView()
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
        ->add('category') 
        ->add('save', SubmitType::class, array('label'=> 'Créer un article', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')) )

        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //récupérer les données
            $title = $form ['title']->getData();
            $body = $form ['body']->getData();
            $category = $form['category']->getData(); 

            $blogpost->setTitle($title);
            $blogpost->setbody($body);
            $blogpost->setCategory($category);

            //récupérer l'entité
            $em = $this->getDoctrine()->getManager();

            //traite les nouvelles entités en base de données
            $em->persist($blogpost);

            $em->flush();

            $this->addFlash(
                'notice',
                'Article Ajouté!'
                );

            return $this->redirectToRoute('blog'); //rediriger msg vers une page
        }

        return $this->render('blog/create_blog.html.twig', array(
            'form'=>$form->createView()
            ));
    }


    /**
     * @Route("/blog/edit", name="edit_blog_post")
     */
    public function editAction()
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
     public function contactAction(Request $request)
     {
        $contact = new Contact;

         $form = $this->createFormBuilder($contact)
             ->add('name', TextType::class, array('label'=> 'Prénom', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
             ->add('email', TextType::class, array('label'=> 'Email','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
             ->add('subject', TextType::class, array('label'=> 'Sujet','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
             ->add('message', TextareaType::class, array('label'=> 'Message','attr' => array('class' => 'form-control')))
             ->add('Save', SubmitType::class, array('label'=> 'Envoyer', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))

             ->getForm();

         $form->handleRequest($request);

         //Check si le formumlaire est valide
         if($form->isSubmitted() &&  $form->isValid()) {
             $name = $form['name']->getData();
             $email = $form['email']->getData();
             $subject = $form['subject']->getData();
             $message = $form['message']->getData();

             # set form data

             $contact->setName($name);
             $contact->setEmail($email);
             $contact->setSubject($subject);
             $contact->setMessage($message);

             $sn = $this->getDoctrine()->getManager();
             $sn->persist($contact);
             $sn->flush();

             $message = \Swift_Message::newInstance()

                 ->setSubject($subject)
                 ->setFrom('ahmadou.gue@gmail.com')
                 ->setTo($email)
                 ->setBody($this->renderView('blog/sendemail.html.twig',array('name' => $name)),'text/html');

             $this->get('mailer')->send($message);
         }

             return $this->render('blog/contact_blog.html.twig', array(
                 'form'=>$form->createView()
             ));
    }
}
