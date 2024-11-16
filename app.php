<?php

require_once __DIR__ . "/index.php";

use function index\sayHello;

function sayOk(string $name): void 
{
    echo "it`s ok $name" . PHP_EOL;
}

sayHello('joko');
sayOk('yusfi');