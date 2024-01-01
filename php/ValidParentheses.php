<?php

class Solution {

    static function isValid(string $s): bool
    {
        $length = strlen($s);
        if ($length < 2 || $length > 10000 || $length % 2 == 1 ) {
            return false;
        }

        $close_brackets = [];
        foreach (str_split($s) as $bracket) {
            switch ($bracket) {
                case '{':
                    array_push($close_brackets, '}');
                    break;
                case '[':
                    array_push($close_brackets, ']');
                    break;
                case '(':
                    array_push($close_brackets, ')');
                    break;
                default:
                    if (empty($close_brackets) || $bracket != end($close_brackets)) {
                        return false;
                    }
                    array_pop($close_brackets);
            }
        }

        return count($close_brackets) == 0;
    }
}

var_dump(Solution::isValid('()')); // true
var_dump(Solution::isValid('()[]{}')); // true
var_dump(Solution::isValid('(]')); // false
var_dump(Solution::isValid('{[]}')); // true