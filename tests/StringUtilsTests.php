<?php

require_once __DIR__ . '/../src/StringUtils.php';

use testsPhp\StringUtils;

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}
echo __DIR__;
echo 'Все тесты пройдены!';
