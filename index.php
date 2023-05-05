<?php
require_once './Models/Products.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Kennel.php';
require_once './db.php';


?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="text-center">Animals Paradise</h1>
    <div class="container d-flex gap-2 flex-wrap justify-content-center mt-5 mb-5" >

    <?php
    foreach($items as $item){

        ?>
        <div class="card overflow-hidden" style="width: 18rem;">
            <img src=" <?= $item->image ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $item->name?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Prezzo:</strong> <?= $item->price?> &#x20AC</li>
                <li class="list-group-item"><strong>Specie Animale:</strong> <?= $item->species->image?>
                <?php  if(get_class($item)== 'Food'){
                ?>
                <li class="list-group-item"><strong>Ingredienti:</strong> <? echo $item->getStringOfArray($item->Ingredients) ?></li>
                <?php
                }      
                ?>
                </li>
                <li class="list-group-item"><strong>Tipo Prodotto:</strong> <?= get_class($item)  ?></li>
            </ul>
        
        </div>
    <?php

    }

    ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
</body>
</html>