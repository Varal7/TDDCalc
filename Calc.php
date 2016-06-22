<?php
class Calc
{
   public function add($numbers) {
     if ($numbers == "") {
       return 0;
     }
     $num_arr = explode(",", $numbers);
     $result = 0;
     foreach ($num_arr as $num) {
       $result = $result + intval($num);
     }
     return $result;
   }
}
