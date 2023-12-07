<?php

$script = $argv[1] ?? 'test.php';
echo "Скрипт: {$script}" . PHP_EOL;
if (!is_file($script)) {
    die("Ошибка: нет такого файла" . PHP_EOL);
}

echo "Результат выполнения:" . PHP_EOL;
echo "---------------------" . PHP_EOL;

$start = microtime(true);
include($script);
$time = round(microtime(true) - $start, 4);

echo "---------------------" . PHP_EOL;
echo "Время выполнения скрипта: {$time} сек." . PHP_EOL;