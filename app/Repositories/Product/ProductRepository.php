<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\AbstractRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;

use function PHPUnit\Framework\isNull;

class ProductRepository extends AbstractRepository implements ProductRepositoryInterface
{
    protected $categoryRepository;

    public function __construct(Product $model, CategoryRepositoryInterface $categoryRepository)
    {
        $this->model = $model;
        $this->categoryRepository = $categoryRepository;
    }

    public function getProduct()
    {
        $categories = $this->categoryRepository->all();
        $products =  array();
        foreach ($categories as $category) {
            if (isNull($category->products())) {
                continue;
            } else {
                $products[] = $category->products();
            }
        }

        return $products;
    }

    public function getProductByCategory($id)
    {
        $category = $this->categoryRepository->show($id);
        return $category->products();
    }
}
