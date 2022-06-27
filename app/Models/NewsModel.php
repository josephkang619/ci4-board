<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    /*
     * This new property now contains the fields that we allow to be saved to the database.
     * Notice that we leave out the id? That’s because you will almost never need to do that,
     * since it is an auto-incrementing field in the database.
     * This helps protect against Mass Assignment Vulnerabilities.
     * If your model is handling your timestamps, you would also leave those out.
     */
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}