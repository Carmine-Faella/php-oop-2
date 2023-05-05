
<?php

class Toys extends Product {

    public $type;

    public function __construct($_image, $_name,  $_price, $_icon, Type $_type)
    {
        parent::__construct($_name, $_image, $_price, $_icon);
        $this->type = $_type;

    }


}