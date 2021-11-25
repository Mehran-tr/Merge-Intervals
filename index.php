<?php
class Solution {
    /**
     * @param int[][] $intervals
     * @return int[][]
     */
    function merge(array $intervals): array {
        sort($intervals); // we first sort

        $len = count($intervals);
        for ($i = 0; $i < $len - 1; ++$i) {
            [$start, $end] = $intervals[$i];
            [$start2, $end2] = $intervals[$i + 1]; // next

// Merge with the next element
            if ($end >= $start2) {
                unset($intervals[$i]);
                $intervals[$i + 1] = [$start, max($end, $end2)];
            }
        }

        return $intervals;
    }
}

$Input = [[1,3],[2,6],[8,10],[15,18]];

$solution = new Solution();
print_r($solution->merge($Input));