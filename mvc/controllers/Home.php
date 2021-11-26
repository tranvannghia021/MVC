<?php
class Home extends Controller
{
    public $Product;
    public $Category;
    function __construct()
    {
        $this->Product = $this->model("product");
        $this->Category = $this->model("category");
    }
    function index()
    {
        $this->view("index", [
            "page" => "home",
            "product" => $this->Product->getAll(),
            "category" => $this->Category->getCategory(),
        ]);
    }
    function cart()
    {
        $this->view("index", [
            "page" => "cart",
            "category" => $this->Category->getCategory(),
        ]);
    }
}
