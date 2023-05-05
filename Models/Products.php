
<?php

class Product {

    public $image;
    public $name;
    public $price;
    public $icon;

    public function __construct( $_image,$_name, $_price, $_icon)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->icon = $_icon;
    }
    
}