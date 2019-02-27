<?php
require_once __DIR__ . '/../vendor/autoload.php';
use VisitorsCounter\Counter;

$counter = new Counter();

echo $counter->sayHelloWorld();
echo $counter->getVisitorsNumber();
$counter->incrementVisitors();
echo $counter->getVisitorsNumber();