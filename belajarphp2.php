<?php
//Create Dynamic
$nama_asli = "Adrian Chen";
$nama_samaran = "Luminoir";


echo $nama_asli ." ". $nama_samaran;
//to add new line or paragraph
echo "<br/>";


//to add space use this
// another way to output a string
echo "$nama_asli $nama_samaran $";


//to add space without using chaining
echo "<r/  or  n/>";


//dont need to declare the type of the variable example
$umur = 18;
$string = "ini";
$double = 0.4;
$boolean_true = true;
$boolean_false = false;
$novalue_or_null = null;
    //there are two way to add a array type variable
$hobby = ["Gaming", "Coffe", "Being sad", "Taking a Rest", "Speeding"];
$hobby2 = array("Gaming, Sleep, Jerk Off");
//so you dont need to literally type the datatype

echo "<br/>";
// check the what data type is inside the variable use var_dump() e.g:
var_dump($umur);
echo "<br/>";
var_dump($string);
echo "<br/>";
var_dump($double);
echo "<br/>";
var_dump($boolean_false);
echo "<br/>";
var_dump($boolean_true);
echo "<br/>";
var_dump($novalue_or_null);
echo "<br/>";
var_dump($hobby);
echo "<br/>";
var_dump($hobby2);
echo "<br/>";


//list of array function
    // to count total of how many item in the array
    echo count($hobby);
    echo "<br/>";
    echo count($hobby2) ;
    echo "<br/>";


    // to merge 2 array or more;
    $hobby3 = array_merge($hobby, $hobby2);
    echo "<br/>";

    //to show the item inside of the array use print_r e.g:
    print_r($hobby);
    echo "<br/>";
    print_r($hobby2);
    echo "<br/>";
    print_r($hobby3);
    echo "<br/>";

    //Create Static Variable or Constant var. The first parameter is the name of the variable and the second parameter is the value of that variable
    define("TempatLahir", "Palembang");
    echo "<br/>";
    echo TempatLahir;
    echo "<br/>";


    //to delete variable use unset e.g:
    unset($umur);
    echo "<br/>";
    echo $umur; // will show an error cause the variable in gone or deleted
    echo "<br/>";
?>