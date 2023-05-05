
<?php

class Item extends Product {

    public function __construct($_image, $_name, $_price, $_icon, Type $_type)
    {
        parent::__construct($_image,$_name, $_price, $_icon,$_type);

    }


}