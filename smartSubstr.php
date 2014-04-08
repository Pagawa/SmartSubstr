<?php
/**
 * SmartSubstr - Version 1.0
 *
 * Copyright 2014, Jonathan M. Piat
 * http://pgwjs.com - http://pagawa.com
 * 
 * Released under the MIT license - http://opensource.org/licenses/MIT
 */

function smartSubstr($str, $maxLength, $separator = ' ', $tail = '...')
{
    if (mb_strlen($str) <= $maxLength) {
        return $str;
    }

    $returnStr = '';
    $totalLength = 0;
    $separatorLength = mb_strlen($separator);
    $explodeStr = explode($separator, $str);

    if (count($explodeStr) > 1) {
        foreach($explodeStr as $item) {

            $itemLength = mb_strlen($item . $separator);
            $totalLength += $itemLength;

            if ($totalLength >= $maxLength) {
                if (substr($returnStr, -$separatorLength, $separatorLength) == $separator) {
                    $returnStr = substr($returnStr, 0, -$separatorLength);
                }

                $returnStr = trim($returnStr) . $tail;
                break;
            }

            $returnStr .= $item . $separator;
        }
    } else {
        return mb_substr($str, 0, $maxLength);
    }

    return $returnStr;
}