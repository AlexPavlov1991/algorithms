<?php

class Solution
{
    const ROMAN_INTEGER = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    static function romanToInt(string $s): int
    {
        $result = 0;
        $prev = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $cur = SELF::ROMAN_INTEGER[$s[$i]];
            $result += $cur - ($cur > $prev ? 2 * $prev : 0);
            $prev = $cur;
        }

        return $result;
    }
}

echo Solution::romanToInt('MCMXCIV') . PHP_EOL; // 1994
echo Solution::romanToInt('MMLC') . PHP_EOL; // 2050
echo Solution::romanToInt('MMLCXXIX') . PHP_EOL; // 2079