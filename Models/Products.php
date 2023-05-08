
<?php

require_once __DIR__ . '/../Traits/Mark.php';
require_once __DIR__ . '/../Traits/Compatibility.php';

class Product {

    use Mark;
    use Compatibility;

    public $image;
    public $name;
    public $price;
    public $icon;
    public $type;

    public function __construct( $_image,$_name, $_price, Type $_type)
    {
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->type = $_type;
    }

    public function getDetails(){
        return "
                <div class='card text-center py-4' style='width: 18rem;'>
                    <div class='h-50'><img src='".$this->image."' class='card-img-top'></div>
                    <div class='card-body h-50'>
                        <h1 class='py-3'>".$this->name."</h1>
                        <div class='card-text'>Prezzo: ".$this->price."</div>
                        <div class='card-text'>".$this->type->icon."</div>
                        <div class='card-text'>Categoria: ".$this->type->type."</div>
                        <div class='card-text'>Marca: ".$this->getMark()."</div>
                        <div class='card-text'>Compabilitá: ".$this->getCompatibility()."</div>
                    </div>
                </div>";
    }
    
}