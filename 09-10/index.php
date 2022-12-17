<?php
require_once 'classes/Ad.php';
require_once 'classes/VacancyAd.php';
require_once 'classes/Iuser.php';
require_once 'classes/ResumeAd.php';

$vacancy1 = new VacancyAd('Дворник',
    'Дворник на уборку территори',
    35000, '+79687851457',
    'СПБ, ул. Дровеная - 15');
$vacancy2 = new VacancyAd('Грузчик',
    'На погрузку ящиков',
    45000, '+79687851457',
    'СПБ, ул. Дровеная - 23');
$vacancy3 = new VacancyAd('Водитель',
    'На урал 1569',
    55000, '+796878514517',
    'СПБ, ул. Дровеная - 2331');

echo "<h1>Вакансии</h1>
      <hr>
        <h2>{$vacancy1->getName()} | зарплатаa: <span>{$vacancy1->getSalary()}</span></h2>
        <p>{$vacancy1->getDescription()}</p>
        <p>{$vacancy1->getPhone()}</p>
        <p>{$vacancy1->getLocation()}</p>
      <hr>
      <h2>{$vacancy2->getName()} | зарплата: <span>{$vacancy1->getSalary()}</span></h2>
        <p>{$vacancy2->getDescription()}</p>
        <p>{$vacancy2->getPhone()}</p>
        <p>{$vacancy2->getLocation()}</p>
      <hr>
       <h2>{$vacancy3->getName()} | зарплата: <span>{$vacancy1->getSalary()}</span></h2>
        <p>{$vacancy3->getDescription()}</p>
        <p>{$vacancy3->getPhone()}</p>
        <p>{$vacancy3->getLocation()}</p>
      <hr>
     ";

$resume1 = new ResumeAd('Менеджер',
    'Умею продавать',
    35000,
    '+79687851457',
    'kienia@tut.by');
$resume2 = new ResumeAd('Менеджер',
    'Умею продавать',
    35000,
    '+79687851457',
    'kienia@tut.by');
$resume3 = new ResumeAd('Менеджер',
    'Умею продавать',
    35000,
    '+79687851457',
    'kienia@tut.by');

echo "<h1>Вакансии</h1>
      <hr>
        <h2>{$resume1->getName()} | желаемая зарплата: <span>{$resume1->getSalary()}</span></h2>
        <p>{$resume1->getDescription()}</p>
        <p>{$resume1->getPhone()}</p>
        <p>{$resume1->getEmail()}</p>
      <hr>
     ";

//Тестовый метод интерфеса
echo $resume1->test();