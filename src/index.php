<?php namespace SRPH\MapRange;

/**
 * @param Closure $callback
 * @param int $from
 * @param int $to
 */
function map_range(\Closure $callback, $from, $to) {
    for( $i = abs($from); $i <= abs($to); $i++ ) {
      $callback($i);
    }
}