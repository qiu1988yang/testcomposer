<?php

namespace app\testcomposer;

use siam\Test;

class Test2
{
    public function test()
    {
        require "vendor/autoload.php";

        $Test = new Test();
        $Test->test();
    }


}