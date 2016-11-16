<?php

namespace Icare\UserBundle\Controller;

use Icare\UserBundle\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    protected $postRepository;
    public function __construct(PostRepository $postRepository) {
        $this->postRepository = $postRepository;
    }

    public function indexAction()
    {
      //$this->postRepository->getById(1);
      return $this->render('IcareUserBundle:Default:index.html.twig');
    }
}
