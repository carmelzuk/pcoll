<?php

namespace Carmelzuk\Pcoll\Mock;


class MockStructure{

    function getMockStruct(){
        return file_get_contents(__DIR__ . "/mockStructure.json");
    }

}