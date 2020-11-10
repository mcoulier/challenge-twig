<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dash;
use App\Entity\InfoLogger;
use App\Entity\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    //Don't forget $param request in working comment
    /**
     * @Route("/", name="master")
     * $param Request $request
     */
    public function index(Request $request): Response
    {
        //Get user message from index twig form
        $message = "";
        if($request->request->get('message')){
            $message = $request->request->get('message');
        }

        //Select option value Cap or Dash
        if($request->request->get('method') == "capitalize"){
            $transform = new Capitalize();
        } else {
            $transform = new Dash();
        }
        //Call class construct to transform message
        $master = new Master($message, $transform);

        //Get message after transform to log
        $messageTransformed = $master->getMessage();

        //Made if for submit button, else page load would send log
        if($request->request->get('submit')){
        $logger = new InfoLogger($messageTransformed);
        }
        //Pass transform msg to twig file
        return $this->render('master/index.html.twig', [
            'message' => $messageTransformed,
        ]);
    }
}
