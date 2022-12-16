<?php

//Включили отображение ошибок
error_reporting(-1);

//Импортировали дебагер
require_once ('../includes/debug.php');

//Импортировали класс Product
require_once('classes/Product.php');

$book = new Product('Слон и моська', 50,null,100);
$notebook = new Product('Asus',2000,'intel');


//Распечатав два объекта мы видим что свойства не характерные для каждого продукта остались хоть и в значении null
//У книги присутствует cpu, а у ноутбука кол-во страниц.
debug($book);
debug($notebook);


//Выводим информацию о продуктах (худо бедно работает)
echo $notebook->getProduct();
echo $book->getProduct('book');

