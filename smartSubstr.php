<?php
/**
 * SmartSubstr - Version 1.1
 *
 * Copyright 2014, Jonathan M. Piat
 * Copyright 2015, François LASSERRE
 * http://pgwjs.com - http://pagawa.com
 *
 * Released under the GNU GPLv3 license - http://opensource.org/licenses/gpl-3.0
 */

function smartSubstr($str, $maxLength, $separator = ' ', $tail = '…')
{
    if (strlen($str)>$maxLength) {
        $str = substr($str, 0, $maxLength);
        $sp = strrpos($str, $separator);
        $str = substr($str, 0, $sp).$tail;
    }

    return $str;
}