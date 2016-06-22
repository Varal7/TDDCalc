<?php
class Calc
{
   public function add($string) {
     if ($string == "") {
       return 0;
     }
     $result = 0;
     $lines = explode("\n", $string);
     if (substr($lines[0], 0, 2) == "//") {
       $delimiter = explode("/", $lines[0])[2];
       $numbers = explode($delimiter, $lines[1]);
     }
     else {
       $string = str_replace("\n", ",", $string);
       $numbers = explode(",", $string);
     }
     foreach ($numbers as $num) {
       $result = $result + intval($num);
     }
     return $result;
   }
}
