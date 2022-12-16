<?php

//Включили отображение ошибок
error_reporting(-1);

//Импортировали дебагер
require_once ('../includes/debug.php');

//Подключили классы (Родительские и дочерние)
require_once('classes/Product.php');
require_once ('classes/NotebookProduct.php');
require_once ('classes/BookProduct.php');

$book = new BookProduct('Слон и моська', 50,500);
$notebook = new NotebookProduct('Asus',2000, 'Intel');

debug($book);
debug($notebook);

echo $notebook->getProduct();
echo $book->getProduct('book');

