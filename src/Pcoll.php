<?php

namespace Carmelzuk\Pcoll;


use Carmelzuk\Pcoll\Mock\MockStructure;

class Pcoll{

    function hello(){
        return "Hello World";
    }

    function getDummyStruct(){
        $mock = new MockStructure();
        return $mock->getMockStruct();
    }

}