<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\AbstractRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

// require "E:\stu web\Eshopproject/eshop/app/Repositories/AbstractResponsitory.php";


class CategoryRepository extends AbstractRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $model)
    {
       $this->model = $model;
    }
}
