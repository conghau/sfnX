<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 16/11/2016
 * Time: 11:04
 */

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class LuckyController
 *
 * @Route("/lucky")
 * @package AppBundle\Controller
 */
class LuckyController extends BaseController{
  /**
   * @Route("/")
   */
  public function indexAction(Request $request)
  {
    // replace this example code with whatever you need
    return $this->render('lucky/index.html.twig', array(
      'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
    ));
  }
}