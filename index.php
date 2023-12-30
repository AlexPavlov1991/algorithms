<?php

require_once('/app/lib/functions.php');

$script = $argv[1] ?? 'test.php';
echo "Скрипт: {$script}" . PHP_EOL;
if (!is_file($script)) {
    die("Ошибка: нет такого файла" . PHP_EOL);
}

echo "Результат выполнения:" . PHP_EOL;
echo "---------------------" . PHP_EOL;

$time_start = microtime(true);
$memory_start = memory_get_usage();
include($script);
$memory = convert(memory_get_usage() - $memory_start);
$time = round(microtime(true) - $time_start, 4);

echo "---------------------" . PHP_EOL;
echo "Время выполнения скрипта: {$time} сек." . PHP_EOL;
echo "Памяти использовано: {$memory}" . PHP_EOL;