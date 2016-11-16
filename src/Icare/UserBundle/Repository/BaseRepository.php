<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 16/11/2016
 * Time: 11:45
 */

namespace Icare\UserBundle\Repository;


class BaseRepository implements IBaseRepository {
  protected $model;
  public function getAll() {
//    $this->model
  }


  public function getById($id) {
    return $this->model->find($id);
  }
}