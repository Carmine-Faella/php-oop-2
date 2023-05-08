<?php

        $newTypeDog = new Type('Cane','<i class="fa-solid fa-dog"></i>');
        $newTypeCat = new Type('Gatto','<i class="fa-solid fa-cat"></i>');

        $newCard=[
            new Item('https://www.tecnoagrigarden.it/public/prodotti/8059149035789.jpg','Mangime per cani','22€',$newTypeDog),
            new Item('https://images.obi-italia.it/product/IT/1500x1500/166400_1.jpg','Pallina da gioco','12€',$newTypeCat),
            new Item('https://www.ferramentavanoli.com/cuccia-del-cane-schleich~1~4~6551~11619.jpeg','Cuccia per cani','32€',$newTypeDog)
        ];

        $card = new Item('https://www.tecnoagrigarden.it/public/prodotti/8059149035789.jpg','Mangime per cani','22€',$newTypeDog);

        $card->setMark('Cantix');
        $card->setCompatibility('Si');

        

       