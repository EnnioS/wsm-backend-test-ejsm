<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Document\Metric;
use App\Document\Account;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;


class ReportsController extends AbstractController
{
	/**
		* @Route("/")
	**/
	public function index(DocumentManager $documentManager){
		// phpinfo();
		$cursor = $documentManager->getDocumentCollection(Metric::class)->find();
		$metrics = $cursor->toArray();

		// dd($metrics);
		return $this->render('views/index.html.twig',["metrics" => $metrics]);

	}

	/**
		* @Route("/search")
	**/
	public function search_acount_id(Request $request){
		$account = $request->request->get('accountID');
		return $this->render('views/index.html.twig',["account_id" =>$account]);
	}


	/**
		* @Route("/test/{slug}")
	**/

	public function test($slug){
		return new Response($slug);
	}
}
?>