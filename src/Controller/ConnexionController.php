<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion/{email}/{password}", name="login")
     */
    public function login($email,$password,NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();

        $connecteduser = $em->getRepository(User::class)->findBy(array('email'=>$email,'password'=>$password));

     /*   $data = $this->get('jms_serializer')->serialize($connecteduser, 'json');
        if(empty($connecteduser)){
            $data = $this->get('jms_serializer')->serialize(null, 'json');
        }
        else if($connecteduser[0]->isStatus()==false){
            $data = $this->get('jms_serializer')->serialize('votre compte est desactive', 'json');
        }*/

        $data = $normalizer->normalize($connecteduser,'json');

        return new Response(json_encode($data));


        /*$response = new Response($data,200);
        $response->headers->set('Content-Type', 'application/json');

        return $response;*/
    }//termine




}
