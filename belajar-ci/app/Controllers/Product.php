<?php namespace App\Controllers;

use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->getProducts();
        return view('product_list', $data);
    }

    public function detail($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->getProductById($id);
        return view('product_detail', $data);
    }
}
