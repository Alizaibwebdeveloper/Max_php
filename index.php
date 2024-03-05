<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max_php</title>
</head>
<body>
    <h1>PHP Development!</h1>

    <?php

  $filename = "file.txt";

  try{
    $file_content = file_get_contents($filename);
    echo "file content:";
    echo $file_content."<br>";
  }catch (Exception $e){
    echo "An invalid error occored:". $e->getMessage();
  }

  // ********check the file exist on this **************

  function check_file($filepath){
  if(file_exists($filepath)){

    echo "File exixit at :".$filepath."<br>";
  
  }else{

    echo "file not exist at:".$filepath;
  }

  }

  $filepath = "file.txt";

  check_file($filepath);

   // *********challenge to add a content in your php file*******

   function write_to_file($filename,$content){

   try{

    $filehandel = fopen($filename,'w');
    if($filehandel=== false){

      throw new Exception("Error opening the file. ");
      
    }

    fwrite($filehandel, $content);

      fclose($filehandel);
      echo "Content written to the file succesfully!.'<br>'";


   }catch (Exception $e){

    echo "An error occured: ".$e->getMessage();
   }

   

   }

   $filename = 'file.txt';

   $content = "I am a php developer. I want to polish my skill with the advance topic of php. My future plan  is to build  my portfolio by doing Ausome project." ;

   write_to_file($filename, $content);

  //  *******write a php ptogramm to rename a file**********



$old_file = 'file.txt';
$new_file = 'new.txt';

try {
    if (file_exists($old_file)) {
        if (rename($old_file, $new_file)) {
            echo "File renamed successfully!.'<br>'";
        } else {
            throw new Exception("Error renaming the file!");
        }
    } else {
        throw new Exception("File does not exist");
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

//***********write a php programm that copies a file from one location to other ************/


function files_tocopy($source,$destination){

  try{
    if(!file_exists($source)){

      throw new Exception("File does not exist");
    }
    if(!copy($source,$destination)){
      throw new Exception("Error copying the file!");
    }
    echo "File copied successfully!.'<br>'";
  }catch(Exception $e){

    echo "Error occured:".$e->getMessage();
  }
}

$source = 'new.txt';
$destination = 'rename/new.txt';

files_tocopy($source,$destination);


// *******write a php programm that delete a specific file from the server**********

$filename = 'rename/new.txt';
try{

if(file_exists($filename)){

  if(unlink($filename)){

    echo "File deleted Successfully!.'<br>'";
  }else{
    throw new Exception("Error deleting the file");
  }
}else{
  throw new Exception("File  does not exist");
} 
}catch (Exception $e){
 echo "An error occured:".$e->getMessage();
}

// *********challege to check the file writable******

$filename = 'new.txt';
try{

  if(is_writable($filename)){
    echo "File is readable";
  }else{
    echo "file is not writable";
  }
}
  catch (Exception $e){
    echo "An error ooccured.".$e->getMessage();
  }

// *******write a php programm that append a string to an existing file********

$filename = 'new.txt';
$content = "Add this text in the file";

try{
  

  $filehandle= fopen($filename ,'a');

  if($filehandel===false){
    throw new Exception("Error Append a new content");
  }
  fwrite($filehandel,$content);

  fclose($filehandel);
  echo "Content Apppend the file successfully!";

}catch (Exception $e){
 echo "An error occured".$e->getMessage();
}

// *****************

$filename = 'new.txt';
$file_extenction = pathinfo($filename,PATHINFO_EXTENSION);

// for each loop in php




?>
  
</body>
</html>