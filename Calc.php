<?php
class Calc
{
   public function add($string) {
     if ($string == "") {
       return -1;
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

    $negativeNumbers = "";
     foreach ($numbers as $num) {
       $int = intval($num);
       if ($int < 0) {
        $negativeNumbers .= " ".$int;
       }
       $result = $result + $int;
     }
     if ($negativeNumbers != "") {
         throw new InvalidArgumentException("This is not a nonnegative integer:". $negativeNumbers);
     }
     return $result;
   }
}
