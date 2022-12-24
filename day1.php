<?php

class Caculator{
    public $numberA = 1;
    public $numberB = 2;

    const _MSG = 'kết quả: value';

    function makeAdd($a,$b){
       $result = $a + $b;
        return $result;
    }

    function makeMinus($a,$b){
        $result = $a - $b;
         return $result;
     }

     function makeMultiply($a,$b){
        $result = $a * $b;
         return $result;
     }

     function makeDivide($a,$b){
        $result = $a / $b;
         return $result;
     }

     function showResult($msg, $value){
        return str_replace('value',$value,$msg);
     }
     function showShort($value){
        $msg = $this::_MSG;
        return str_replace('value',$value,$msg);
     }
}


$object = new Caculator();

echo $object->numberA;
echo '<br>';
echo $object->numberB;

// sum
echo '<br>';
$sum = $object->makeAdd($object->numberA, $object->numberB);
echo $sum;

echo '<br>';
$msg = $object->showResult($object::_MSG, $sum);
echo $msg;

echo '<br>';
echo $object->showShort($sum);