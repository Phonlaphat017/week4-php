<?php

//calling a function
function welcome(){
    echo"Hi, welcome to Thailand";
}

//calling by value
function sayHi($name,$age){
    //echo"Hello Week4 <br>";
    echo "$name $age";
}

//Call by reference
function adder(&$str,&$std1){
    $str = "Call By Reference";
    $std1 = "James";
}
//Default agrument Value
function lastName($name = "Chananthon"){
    echo"Hello $name<br />";
}

welcome();//Calling a function
echo"<br />";
sayHi("ZEE",25);//calling by value
echo"<br />";
sayhi("John",30);//calling by value
echo"<br />";
adder($str,$std1);//call by Reference
echo $str ," ", $std1;
echo"<br />";
echo lastName();

