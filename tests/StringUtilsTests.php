<?php

require_once __DIR__ . '/../vendor/autoload.php';

use function testsPhp\StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''),'');

echo 'Все тесты пройдены!';
