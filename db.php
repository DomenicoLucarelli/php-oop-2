<?php
require_once './Models/Products.php';

$crocchette = new Food("Crocchette",2.50,"Dog","https://www.ideashoppingcenter.it/files/archivio_Files/Foto/39099_2.JPG",["farina","carne","frutta"],500);

$lettiera = new Kennel("Lettiera",50.99,"Cat","https://magazine.farmae.it/magazine/wp-content/uploads/2022/07/AdobeStock_487331488-1-scaled.jpeg","medium","plastic");

$pallina = new Toy('Pallina',10.50,'Dog','https://shop-cdn-m.mediazs.com/bilder/palla/gioco/per/cani/snackball/5/400/22569_pla_snackball_fg_7746_6_5.jpg','rubber');