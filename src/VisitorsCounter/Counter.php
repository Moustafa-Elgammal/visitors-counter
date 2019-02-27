<?php

namespace VisitorsCounter;

class Counter
{
    private $visitors;

    Public function __construct()
    {
        $this->visitors = 0;
    }

    public function incrementVisitors(){
        $this->visitors += 1;
    }

    public function getVisitorsNumber(){
        return $this->visitors;
    }

    public function sayHelloWorld(){
        return 'Hello, World!';
    }
}