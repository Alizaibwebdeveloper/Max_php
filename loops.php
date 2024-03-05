
<?php

$arr = array("green", "blue", "pink", "white");  
  
// Loop through the array elements 
foreach ($arr as $element) { 
    echo "$element .'<br>'"; 
} 


// *****for each loop on Associativ Array*****


$employee = array("name"=>"Joerge","email"=>"joerge@gmail.com","Age"=>29,"Gender"=>"M");

foreach($employee as $key=>$value){

    echo $key .":". $value . "<br>";


}

// *********Determine the first and last iteration of the for each loop***********

$myarray = array(1,2,3,4,5,6,7);

$counter = 0;

foreach($myarray as $items){

    if($counter==0){

        print($items);

        print ": first iteration";

    }
  if($counter== count($myarray)-1){

    print($items);
    print("last iteration:");
  }

  $counter =$counter+1;


}

// *******table  of 5 using for each loop

$table = array(1,2,3,4,5,6,7,8,9,10);

$num =array(5,10,15,20,25,30,35,40,45,50);

foreach($table as $key => $val){

     echo "5 x $val =". $num [$key] ."<br>";
}

$n1 = 1;
$n2 = 10;

for($n1 ;$n1<=$n2; $n1++){

  echo $n1."<br>";
  if($n1%2==0){
    echo $n1. "This is even number.'<br>'";
  }else{
    echo "this is odd number";
  }

 
}

$num= array(10,20,30,40,50,60,70,80,90,100);
// $sum = array_sum($num);
// print_r($sum);

// $max = max($num);
// $min = min($num);

// print_r($max);
// echo "<br>"; 
// print_r($min)."<br>";


//  $reverse = array_reverse($num);
//  print_r($reverse);


// $unique = array_unique($num);
// print_r($unique);

$count  = count($num);

for($i=1; $i<=$count; $i++){
echo $i ."<br>";

}

