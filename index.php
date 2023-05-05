<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <?php 

        require_once __DIR__ . '/Models/Products.php';
        require_once __DIR__ . '/Models/Food.php';
        require_once __DIR__ . '/Models/Toys.php';
        require_once __DIR__ . '/Models/Home.php';
        require_once __DIR__ . '/Models/Type.php';

        $newTypeDog = new Type('Cane');
        $newTypeCat = new Type('Gatto');



        $newCard = new Food('ciao','Mangime per cani','22','cane',$newTypeDog);
        $newCardToys = new Toys('ciao','Mangime per cani','22','cane',$newTypeCat);
        $newCardHome = new Home('ciao','Mangime per cani','22','cane',$newTypeDog);

        var_dump($newCard);
        var_dump($newCardToys);
        var_dump($newCardHome)
    
    
    ?>

    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>