<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepository;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categoryRepository;
    private $productRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, ProductRepository $productRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        // dump(array_unique($this->categoryRepository->all()->pluck('name')->toArray()));
        dump($this->categoryRepository->all());
        dump($this->productRepository->getProduct());
        die;
        return view('index');
    }
}
