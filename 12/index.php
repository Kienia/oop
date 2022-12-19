<?php
//Заменяем функцией автозагрузки
// require_once 'classes/Product.php';
// require_once 'classes/BookProduct.php';
// require_once 'classes/NotebookProduct.php';
// require_once 'interfaces/Icase.php';

//Пространство имен
use classes\BookProduct;
use classes\NotebookProduct;


//Функция автозагрузки
//Когда нужный класс неподключен PHP ищет функции автозагрузки и автоматически подтягивает необходимые классы
//Функция вызывается если данный класс еще не был подключен
function autoloader($class)
{
    //Заменяем слеши 
    $class = str_replace("\\", '/', $class);
    //Прописываем путь к папке с классами
    $file = __DIR__ . "/{$class}.php";
    //Подключаем класс
    //file_exists() - Проверяет наличие файла возвращает TRUE/FALSE
    if (file_exists($file)) {
        require_once $file;
    } else {
        exit("файл {$file} не найден");
    }
}

//spl_autoload_register()  - Встроенная PHP функция для автоподключения классов 
spl_autoload_register('autoloader'); // callback,true,очередность(true - вызывается первой)
// spl_autoload_register('autoloader1'); // spl_autoload_register - Разрешен множественный вызов

// Для больших приложений spl_autoload_register - не лучший вариант

//ПРОСТРАНСТВО ИМЕН 
//Пространствы имен - нужны для избежания конфликта имен




$book1 = new BookProduct('PHP 7', 1000, 5000);
$notebook1 = new NotebookProduct('Asus', 5000, 'intel');

echo "Название товара: {$book1->getName()} - Цена: {$book1->getPrice()} - Кол-во страниц: {$book1->getNumPages()}";
echo "<br>-----------------------------------------------------------<br>";
echo "Название товара: {$notebook1->getName()} - Цена: {$notebook1->getPrice()} - Процессор: {$notebook1->getCpu()} - {$notebook1->showCase()}";
