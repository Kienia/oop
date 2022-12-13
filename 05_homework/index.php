<?php

require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt');

$file->write('Текст 1 который будет записан');
$file->write('Текст 2 который будет записан');
$file->write('Текст 3 который будет записан');

