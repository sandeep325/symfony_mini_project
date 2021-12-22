<?php

namespace App\Controller;
use App\Entity\Register;
use App\Repository\RegisterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
// use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminLoginController extends AbstractController
{
    
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,Request $request): Response
    {  
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('test');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {  
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

 /**
     * @Route("/registerss", name="register")
     */
//     public function Register(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
//      {
//        // die("test");
//   $reg_form = $this->createFormBuilder()
//   ->add('username',TextType::class)
//   ->add('email',EmailType::class)
// //   ->add('username',TextType::class,['label'=>'Username'])
// //   ->add('email',EmailType::class,['label'=>'Email'])
//   ->add('password',RepeatedType::class,
//             ['type'=>PasswordType::class,
//             'required' => true,
//             'first_options' => ['label' =>'password'],
//             'second_options' => ['label' =>'confirm Password']
//               ])
//               ->add('Register',SubmitType::class)
//               ->getForm();
//               $reg_form->handleRequest($request);
//               if($reg_form->isSubmitted()) {
//                  $regData =  $reg_form->getData();
//                 //  var_dump($regData ); die;

//                 // $registerObj = new Register();
//                 $model = new Register();
//                 $model->setUsername($regData['username']);

//                 $model->setEmail($regData['email']);
//                 // echo $regData['password']; die;

//                 $plainPassword = $regData['password'];
//                 if (!is_null($plainPassword)) {
//                     // echo $plainPassword; die;
//                    $pass =  $passwordEncoder->encodePassword($model, $plainPassword);
//                     $model->setPassword($pass);
//                 }

//                 // $model->setPassword($passEncoder1->encodePassword( $model, $regData["password"]));
//                 // $model->setPassword($regData["password"]);
                
//                 // die("here");

//                 $em = $this->getDoctrine()->getManager();
//                 $em->persist($model);
//                 $em->flush();

//               }

//         return $this->render('security/register.html.twig',['registerForm'=>$reg_form->createView()]);

//     }
}
