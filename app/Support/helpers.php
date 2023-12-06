<?php

if (!function_exists('phoneToFormat')) {
    function phoneToFormat($text) {
        if (is_null($text)) {
            return null;
        }

        return sprintf("+%s (%s) %s-%s-%s",
            substr($text, 0, 1),
            substr($text, 1, 3),
            substr($text, 4, 3),
            substr($text, 7, 2),
            substr($text, 9)
        );
    }
}
