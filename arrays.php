<?php

// *******creating Array using array function********

$fruits = array("Banana","Apple", "orange");

// *******creating an array using square brackets******

$fruits = ['cherry','bnana','shangla'];

// *********Accessing element of an array*********

// ****Accesing element for an indexed array:


    $fruit = $fruits[0];
    $color = $fruits['shangla'];

    // *******Array push and pop****

    array_push($fruits, "gava");

    array_pop($fruits);

    // ********Merging an array*********

    $fruit1 = ["bnana","kela"];
    $fruit2 = ["seb","Malta"];

    $fruits = array_merge($fruit1,$fruit2);
    echo "<pre>";
    print_r ($fruits);

    "</pre>";

    // *******aRRAY*****

    $color = array("white", "green","red","blue","black");

    echo "jdjdjdhjdhjdhjdhdj $color[1] wjhjkjakjakj $color[2]";

    // *****New challenge  of Array*****

    $color = array('white','green','red');

    echo ".$color[1].'<br>'";
    echo ".$color[2].'<br>'";
    echo ".$color[0].'<br>'";

    // ***Array

   



$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


//   **********Delete an array from **********
$num = array(1,2,3,4,5);

var_dump($num);

unset($num[3]);

var_dump($num);

// *****write a php script to get the first element of an array*******

$myarray = array(
    array("Ankit","Ram","Shyam"),

    array("Unao", "Treechy", "Kanpur")
);

var_dump($myarray);

// ****Multi Dimension Associative Array**************

$mark = array(

    "Ankirit"=> 
    array(
    "physics "=> 60,
    "chemistary"=>40,
    "Math"=>50,
    ),
    "shuksi"=>array(
        "physics "=> 30,
        "chemistary"=> 20,
        "Math"=>60,
    ),
    "Manmohan"=>array(
        "physics "=>80,
        "chemistary"=> 10,
        "Math"=>20,
    ),
);


var_dump($mark);

// *****find the first element of an array*****

$color = array("white","green","Blue");

var_dump(reset($color));


//   ****Inserting an new array eleemnt at any position **********

$original = array(1,2,3,4,5,6,7,8,9);

echo "original array is.'<br>' ";
foreach($original as $value){
    echo $value."<br>";
}

$insert = '$';

array_splice($original, 3,0,$insert);
 echo "original array after insert '$'";

 foreach($original as $value){
  
    echo $value."<br>";

 }

//  *****write a php script to find the shortest and longest  string length*********

$my_array = array("abcd","sdf","se","d");
$new_array = array_map('strlen',$my_array);
echo "The shortest array length". min($new_array);
echo "The longest array length". max($new_array);

// *****write a php script to find the shortest*********









