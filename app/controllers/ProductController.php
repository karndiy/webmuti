<?php

class ProductController extends Controller
{
    public function index()
    {
        $product = $this->model('Product');
        $products = $product->getAll();
        $this->view('product/index', ['products' => $products]);
    }

    public function show($id){
        $product = $this->model('Product');
        $product = $product->getById($id);
        $this->view('product/show', ['product' => $product]);
    }

    public function chat(){
       // $chat = $this->model('Product');
        $this->view('product/chat');

    }

}
