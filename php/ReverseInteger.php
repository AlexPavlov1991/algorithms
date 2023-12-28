<?php

class Solution {
    static function reverse(int $x): int
    {
        $x = (string) $x ;
        $result = '';

        for ($i = strlen($x) - 1; $i >= 0; $i--) {
            if ($i == 0) {
                $result = ($x[$i] == '-') ? -1 * (int) $result : (int) ($result . $x[$i]);
                break;
            } else {
                $result .= $x[$i];
            }
        }

        if ($result < -2147483648 || $result > 2147483647) {
            return 0;
        }

        return $result; // $result - 32-bit integer [-2**32, 2**31 -1]
    }
}

echo Solution::reverse(123) . PHP_EOL; // 321
echo Solution::reverse(-123) . PHP_EOL; // -321
echo Solution::reverse(120) . PHP_EOL; // 21
echo Solution::reverse(1534236469) . PHP_EOL; // 0