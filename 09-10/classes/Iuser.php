<?php
//Интерфейсы - (НЕЧАСТО ИСПОЛЬЗУЮТСЯ) - По сути это теже классы, но без реализации;
//Можно сказать Интерфейс - это класс который не имеет реализации, а класс - это интерфейс который имеет реализацию;
//Интерфейсы поддерживают множественную реализацию;
//Все методы в интерфейсе public (в других нет смысла);
//От интерфейса нельзя создавать объект, так же как и от абстрактного класса;
//Вся логика интерфейса реализуется в классе реализующий этот самый интерфейс, поэтому все методы в интерфейсе
//должны быть public и недолжны иметь реализацию как и астрактные методы в авбстрактном классе

//Интерфейсы рекомендуюется хранить в отдельной папке

//Интерфейсы именуют с большой буквы I наприимер Iuser
interface Iuser {

    //В обычных класса мы можем перезагрузить(переопределить значение) константу в классах наследниках, в интерфейсах мы так сделать не можем
    const TEST2 = 'Test interface';

    //Метод интерфейса (РЕАЛИЗАЦИИ ЗДЕСЬ БЫТЬ НЕ ДОЛЖНО!!!!)
    public function test();
}