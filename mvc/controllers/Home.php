<?php
class Home extends Controller
{
//áiugdiasugdiuasg
    public $Product;
    public $Category;
    function __construct()
    {
        $this->Product = $this->model("product");
        $this->Category = $this->model("category");
    }
    function index()
    {
        return $this->view("index", [
            "page" => "home",
            "product" => $this->Product->getAll(),
            "category" => $this->Category->getCategory(),
        ]);
    }
    function product()
    {
        return $this->view("index", [
            "page" => "Product",
            "product" => $this->Product->getAll()
        ]);
    }
    function cart()
    {
        return $this->view("index", [
            "page" => "Cart",

        ]);
    }
}
