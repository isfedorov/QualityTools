<?php

class Sample
{
    public static array $statProp = [];

    public static function foo()
    {
        return self::$statProp;
    }
}

Sample::foo();


///comment
