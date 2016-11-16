<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 16/11/2016
 * Time: 11:44
 */

namespace Icare\UserBundle\Repository;


interface IBaseRepository {
  public function getAll();
  public function getById($id);
}