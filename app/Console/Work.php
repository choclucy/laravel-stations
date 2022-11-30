<?php

namespace App\Console;

class Work
{
    public function st2($arg)
    {
        if ($arg === 0) {
            return 'zero';
        }

        if ($arg === '1') {
            return 'foo';
        }

        if ($arg === 1) {
            return 'bar';
        }

        if ($arg >= 2) {
            return 'baz';
        }

        return 'others';
    }

    public function st3($arg)
    {
        switch ($arg) {
            case $arg === 1:
                return 'りんご';
            case $arg === 2:
            case $arg === 3:
                return 'みかん';
            default:
                return 'さくらんぼ';
        }
    }

    public function st4()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $result = 0;
        foreach ($array as $value) {
            if ($value !== 4 && $value%4 === 0) break;

            $result += $value;
        }

        return $result;
    }

    public function st5()
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $result = 0;
        foreach ($array as $value) {
            if ($value%4 > 2) {
                continue;
            }

            if ($value >= 8) {
                break;
            }

            $result += $value;
        }

        return $result;
    }

    public function st6()
    {
        $array = ['apple' => 'red', 'banana' => 'yellow'];

        print_r($array);
    }
}
