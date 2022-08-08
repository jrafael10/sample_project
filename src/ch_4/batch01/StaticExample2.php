<?php

namespace popp\ch_4\batch01;

/* listing 04.03 */

class StaticExample2 
{
    public static int $aNum = 0;

    public static function sayHello(): void 
    {
        self::$aNum++;
        print "hello (" . self::$aNum . ")\n";

    }

}