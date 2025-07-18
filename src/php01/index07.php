<?php
function squareArea($bottom , $hight){
 return $bottom * $hight;
}

function triangleArea($bottom , $hight){
 return (($bottom * $hight)/2);
   }

function trapezoidArea($bottom , $hight , $top){
 return (($bottom + $top) * $hight / 2);
}

echo "四角形は" , squareArea(5 , 5) , "cm2" ,  "<br/>";
echo "三角形は" , triangleArea(3 , 10) , "cm2" . "<br/>";
echo "台形は" , trapezoidArea(5 , 7 , 4) , "cm2" . "<br/>";