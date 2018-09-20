<?php
require_once __DIR__ . '/vendor/autoload.php';
$obj= new Dompdf\Dompdf();
$obj->loadHtml("<h1>Hello world</h1>");
$obj->render();
$obj->stream();
?>