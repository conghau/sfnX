<?php
/**
 * Created by PhpStorm.
 * User: hautruong
 * Date: 16/11/2016
 * Time: 11:46
 */

namespace Icare\UserBundle\Repository;

use Icare\UserBundle\Entity\Post;

class PostRepository extends BaseRepository implements IPostRepository {
  public function __construct(Post $model) {
    $this->model = $model;
  }

  public function getPostWith() {
    // TODO: Implement getPostWith() method.
  }
}