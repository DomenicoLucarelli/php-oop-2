<?php
require_once './Models/Products.php';
$items = [
$crocchette = new Food("Crocchette",2.50,"Dog","https://www.ideashoppingcenter.it/files/archivio_Files/Foto/39099_2.JPG",["farina","carne","frutta"],500),

$lettiera = new Kennel("Lettiera",50.99,"Cat","https://magazine.farmae.it/magazine/wp-content/uploads/2022/07/AdobeStock_487331488-1-scaled.jpeg","medium","plastic"),

$pallina = new Toy('Pallina',10.50,'Dog','https://shop-cdn-m.mediazs.com/bilder/palla/gioco/per/cani/snackball/5/400/22569_pla_snackball_fg_7746_6_5.jpg','rubber'),

$gomitolo = new Toy('Gomitolo di lana', 5, 'Cat','https://www.viedellalana.com/5178-large_default/xgomitolo-aida.jpg.pagespeed.ic.jj-Isscpjg.jpg','wool'),

$trasportino = new Kennel('Trasportino', 100,'Dog','https://m.media-amazon.com/images/I/61VxGYA9Q9L._AC_SY355_.jpg','big','steel' ),

$pate = new Food('Patè',15.98,'Cat','https://www.vendooh.com/1492/10-pz-mousse-alimento-umido-cibo-gatti-sterilizzati-con-carne-ricca-di-manzo.jpg',['Manzo','Pollo'],150),

];