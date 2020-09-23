<?php

class A {
    function test(){
        return 1;
    }

    static function test2(){
        $result = new static();
        return $result;
    }
}

class B extends A{}
class C extends A{}

var_dump(B::test2());


?>