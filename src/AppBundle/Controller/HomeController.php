<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
         $home = array(
            'Title' => 'CrearchiteX - Francois Lewe - V. Symfony',
            'MainTitle_1'=>'Le bureau d\'architecture ',
            'CompanyName'=>'CrearchiteX',
            'MainTitle_2'=>' allie création et techniques. construction, rénovation et design intérieur.',
            'Sliders'=>['images/s1.jpg','images/s2.jpg','images/s3.jpg','images/s4.jpg'],
            'Services'=>['construction'=>'Construction','renovation'=>'Rénovation','interieur'=>'Intérieur'],
            'ServicesDescription'=>['construction'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non gravida est.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos',
                                    'renovation'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non gravida est.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos',
                                    'interieur'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non gravida est.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos',
                                    ],
             'TravauxRecentMainTitle'=>'Travaux récents',
             'TravauxRecentContents'=>['T1'=>['images'=>'images/our-2.jpg',
                                              'titre'=>'Architecture Design',
                                              'DateAjout'=>'December 10, 2013',
                                              'description'=>'Ante venenatis dapibus posuere veilt alquet.'
                                              ],
                                       'T2'=>['images'=>'images/our-4.jpg',
                                              'titre'=>'Architecture Design',
                                              'DateAjout'=>'January 08, 2011',
                                              'description'=>'Ante venenatis dapibus posuere veilt alquet.'
                                             ],
                                       'T3'=>['images'=>'images/our-8.png',
                                              'titre'=>'Architecture Design',
                                              'DateAjout'=>'March 16, 2012',
                                              'description'=>'Ante venenatis dapibus posuere veilt alquet.'
                                             ]
                                      ]
            );
        $view = 'home/index.html.twig';
        return $this->render($view,array('HomeContents'=>$home));
//        return $this->render('home/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
//        ]);
    }

}
