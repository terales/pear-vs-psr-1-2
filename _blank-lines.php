<?php

namespace Acme\Package;

use Acme\Foo;
use Acme\Bar;

class Foo
{
    var $x;
    var $y;

    function foo()
    {

    }
}

class Bar
{
    const X = 1;
    const Y = 2;
    var $a;
    var $b;

    function bar()
    {
        $a = "a";


        $b = "b";


    }

    function bar_2()
    {
        return this::$a . this::$b;
    }


}

?>