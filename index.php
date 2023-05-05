<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        $newCard = new Food('https://www.nutrixpiu.it/wp-content/uploads/2018/09/CANI-DA-SEGUITA_15KG-731x1024.png','Mangime per cani','22€','<i class="fa-solid fa-dog"></i>',$newTypeDog);
        $newCardToys = new Toys('https://images.obi-italia.it/product/IT/1500x1500/166400_1.jpg','Pallina da gioco','12€','<i class="fa-solid fa-cat"></i>',$newTypeCat);
        $newCardHome = new Home('https://www.my-personaltrainer.it/2022/11/23/cane-nella-cuccia-orig.jpeg','Cuccia per cani','32€','<i class="fa-solid fa-dog"></i>',$newTypeDog);

        $newCard->getDetails();
        var_dump($newCard)
    
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="card" style="width: 18rem;">
                <?php 
                    echo $newCard->getDetails();
                ?>
            </div>
            <div class="card" style="width: 18rem;">
                <?php 
                    echo $newCardToys->getDetails();
                ?>
            </div>
            <div class="card" style="width: 18rem;">
                <?php 
                    echo $newCardHome->getDetails();
                ?>
            </div>
        </div>
    </div>


    
</body>
</html>