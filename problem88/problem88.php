<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
 function merge(&$nums1=[], $m=0, $nums2=[], $n=0) {

     
        //For Nums1
       $nums1=array_slice($nums1,0,$m);

       $nums2=array_slice($nums2,0,$n);
        $nums1=array_merge($nums1,$nums2);
        sort($nums1);      
    }
}

?>