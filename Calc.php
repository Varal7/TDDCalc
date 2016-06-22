<?php
class Calc
{
   public function add($numbers) {
     if ($numbers == "") {
       return 0;
     }
     $result = 0;
     $num_arr = explode(",", $numbers);
     foreach ($num_arr as $part) {
       $part_arr = explode("\n", $part);
       foreach ($part_arr as $num) {
         $result = $result + intval($num);
       }
     }
     return $result;
   }
}
