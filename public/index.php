<?php

require_once '../DesignPatterns/start.php';

$text = new DesignPatterns\Creational\AbstractFactory\HtmlFactory();
$new1 = $text->createText('хуйня');

$text = new DesignPatterns\Creational\AbstractFactory\JsonFactory();
$new2 = $text->createText('муйня');

var_dump($new1);

var_dump($new2);