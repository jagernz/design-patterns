<?php

require_once '../DesignPatterns/start.php';

$text = new DesignPatterns\Creational\AbstractFactory\HtmlFactory();
$new  = $text->createText('хуйня');

echo '<pre>';
var_dump($new);
echo '</pre>';