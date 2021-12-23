<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\AddUsersType;
use App\Form\EditUserType;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class TestController extends AbstractController
{

// ==================================SHOW LISTING  DATA FUNCTION ============================================

    #[Route('/', name: 'test')]
    public function index(UserRepository  $entUsr,Request $request): Response
    {
        // $result = $entUsr->findAll();  //for find all
        // echo "<pre>"; print_r($_POST); die;
        if($_POST) {
            // echo "<pre>"; print_r($_POST); die;
            $username  = $_POST['search'];
            $result = $entUsr->findAllWithSearch($username); //for find all order by
            // echo  $result->getName();
            // echo "<pre>"; print_r($result); die;
                $i=1;
            $htmlTable = NULL;
                if($result) {

                    foreach( $result as $key => $val) {

                        $htmlTable .= '<tr>
                          <td>'.$i.'</td>
                          <td>'.$val->getName().'</td>
                          <td>'.$val->getId().'</td>
                          <td>'.$val->getEmail().'</td>
                          <td>'.$val->getMobile().'</td>
                          <td>'.$val->getCity().'</td>
                          <td>'.$val->getAge().'</td>
                          <td>
                          <a href="Test/delete'.$val->getId().'" onclick = "return confirm(`Are You Sure want to delete ?`)" class="btn btn-danger btn-sm">Delete</a>&nbsp;
                         <a href="Test/edit'.$val->getId().'" class="btn btn-info btn-sm">Edit</a>
                          
                          </td>

                        </tr>';
                        $i = $i+1;
                    }

                } else 
                   {  $htmlTable .= '<tr><td class="alert-danger" colspan="8">Opes! Data Not Found...</td></tr>'; };

                   echo $htmlTable;
            exit;

        }  else {
            $result = $entUsr->findBy(array(),array('id'=>'DESC')); //for find all order by

        }
       
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'response' => $result,
        ]);
    }
// ==================================ADD   DATA FUNCTION ============================================

    #[Route('/Test/adduser', name: 'adduser')]
    public function adduser(Request $request,ValidatorInterface $validator) : Response 
    {
        $userobj =  new User();

        $form  = $this->createForm(AddUsersType::class, $userobj);
        $form->handleRequest($request);
        $errors=NULL;
        if ($form->isSubmitted() && $form->isValid()) { 
            // $formData = $form->getData();
            // echo "<pre>"; print_r($_POST['add_users']['name']); die;
            // $userobj->setrawName($_POST['add_users']['name']);
            // $userobj->setrawEmail($_POST['add_users']['email']);
            // $userobj->setrawMobile($_POST['add_users']['mobile']);
            // $userobj->setrawCity($_POST['add_users']['city']);
            // $userobj->setrawAge($_POST['add_users']['age']);
            // echo "<pre>"; print_r($formData); die("test");
            $errors = $validator->validate($userobj);
            if (count($errors) > 0) {
                
                return $this->render('test/adduser.html.twig', [
                    'controller_name' => 'TestController',
                    'FormAdd'  => $form->createView(),
                    'errors' => $errors
                  ]);
            }  else  {

                $em1 = $this->getDoctrine()->getManager();
                $em1->persist($userobj);
                $em1->flush();
                $this->addFlash('editflash','New User Add Successfully...!');  
                return $this->redirect($this->generateUrl('test'));    

            }
             

        }

        
        return $this->render('test/adduser.html.twig', [
            'controller_name' => 'TestController',
            'FormAdd'  => $form->createView(),
            'errors' => $errors
          ]);

    }
// ==================================DELETE DATA FUNCTION============================================
      #[Route('/Test/delete{id}', name: 'delete')]
    public function delete($id,UserRepository  $entUsr) 
    {

        // echo $id; die("testt");
        $em1 = $this->getDoctrine()->getManager();
        $del_res = $entUsr->find($id);
        $em1->remove($del_res);
        $em1->flush();
        $this->addFlash('deleteflash','User Deleted Successfully...!');  
        return $this->redirect($this->generateUrl('test'));      


    }

    // ========================EDIT DATA FUNCTION============================================================================
    #[Route('/Test/edit{id}', name: 'edit')]
          
    public function edit($id,Request $request ,ValidatorInterface $validator):Response {
        //    die($id);
        //   $userobj =  new User();
        // $userobjData = $this->getDoctrine()->getRepository(User::class)->find($id);
        $userobjData = $this->getDoctrine()->getRepository(User::class)->find($id);
          $editform  = $this->createForm(EditUserType::class,$userobjData);
// echo "<pre>"; print_r($request->edit_use); die("check");
          $editform->handleRequest($request);
           $errors=NULL;

          if ($editform->isSubmitted() && $editform->isValid()) { 
            //  $this->getDoctrine()->getManager();
            $errors = $validator->validate($userobjData);
            if (count($errors) > 0) {

                return $this->render('test/edit.html.twig', [
                    'controller_name' => 'TestController',
                    'FormEdit'  => $editform->createView(),
                    'errors' => $errors
                  ]);

            }  else {
                $em1 = $this->getDoctrine()->getManager();
                $em1->persist($userobjData);
                $em1->flush();
                $this->addFlash('editflash','User Updated Successfully..!');  
                return $this->redirect($this->generateUrl('test'));  
                 
            }
           

        }
        
        return $this->render('test/edit.html.twig', [
            'controller_name' => 'TestController',
            'FormEdit'  => $editform->createView(),
            'errors' => $errors
           
          ]);

    }


    // ===================================SEARCHING DATA FUNCTION  ========================================================
//     #[Route('/Test/searchuser', name: 'searching')]
//      public function searchData(UserRepository  $sUser,Request $request) {
        
//         $username  = $_POST['search'];
//         //   echo $username ; die("test");
//         $result =  $sUser->findBy(array('name'=>$username),array('id'=>'DESC')); //for find all order by

//         return $this->render('test/index.html.twig', [
//             'controller_name' => 'TestController',
//             'response' => $result,
//         ]);
//                  return $result;
//         // return $this->redirect($this->generateUrl('test'));  
      
 
//   }

}
