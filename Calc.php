<?php
class Calc
{
   public function add($numbers) {
     if ($numbers == "") {
       return 0;
     }
     return intval($numbers);
   }
}
