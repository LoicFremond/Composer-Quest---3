<?php

require __DIR__ . '/vendor/autoload.php';

use CowSay\Cow;
use CowSay\Bear;

$bessie = new Cow('Hello, Farm!');
echo $bessie;

$ted = new Bear('Coucou!');
echo $ted;