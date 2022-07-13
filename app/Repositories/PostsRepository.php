<?php

namespace App\Repositories;

use App\Post;
use Czim\Repository\BaseRepository;

class PostsRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Post::class;
    }
}
