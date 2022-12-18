<?php
// Интерфейсы удобно применять совместно с контролем типов, совместно с контролем типов интерфейсы предоставляют способ
// проверки, что определенный обьект может содержать некоторый набор методов, свойств или проверять является ли обьект
// обьектом.

class A {};
class B extends A {};
class C {};

$a = new A;
//Обьект $b является экземпляром A и B (который его расширяет)
//Обьект является экземпляром всех классов которые имеются в его родословной
$b = new B;
$c = new C;

//Оператор instanceof проверяет принадлежит ли указанный объект определенному класса возвращает TRUE/FALSE
var_dump($b instanceof B);


require_once 'classes/Gadget.php';
require_once 'interfaces/Igadget.php';  //Подключили интерфейс
require_once 'classes/PhoneGadget.php';
require_once 'classes/WatchGadget.php';

$gadget0 = new PhoneGadget('Телефон', 500, 2);
$gadget1 = new WatchGadget('Часы',100,'Пластик');


//Проверяем тип если передаваемый параметр принадлежит интерфейсу Igadget тогда выводим его
function offerCase (Igadget $gadget)
{
    echo "<p>Предлогаем челол для вашего: {$gadget ->getName()}</p>";
}

offerCase($gadget0);

