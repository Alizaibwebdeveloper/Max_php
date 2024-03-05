<!-- ********Challenges for cookies ********** -->

<?php  


$cookiename = "Username";
$cookievalue = "Ali zaib";

$expirationtime = time() + 3600;

setcookie($cookiename,$cookievalue, $expirationtime);

echo "cookie name 'username' has been set the value 'Ali zaib'";

// ************Retrive and Display the record of cookie username***************

$cookiename = "Username";

if(isset($_COOKIE[$cookiename])){
    $cookievalue = $_COOKIE[$cookiename];
    echo "value of cookie'username':". $cookievalue.'<br>';


}else{
    echo "cookie 'username'.was not found";
}


// ******cookie name **************

$cookiename = "username";
setcookie($cookiename, " " , time()-3600);

echo "cookie named  'username' has been deleted.'<br>'";

// *******session save path *******

// session_save_path('i:/custom');

session_start();

$_SESSION["userid"] = 10020;

echo "session variable 'userid' has been set with the value 10020. '<br>'";

// ***************session username retrieve data **********

// session_start();

if(isset($_SESSION["userid"])){
    $userid  = $_SESSION["userid"];
    echo "value of session variale 'userid'". $userid .'<br>';
    
}else{
    echo "session variable 'userid' is  not found";
}


// ***********write a php script to destroy all session variable********

$_SESSION = [];

session_destroy();

echo "All variable of session has been unset .'<br>'";

// **********write a php script to create a secure session ************


$cookie_name = "my_cookie";

$cookie_value = "Example_cookie_value";

$expiration_time = time() + 3600;
$secureOnly = true;

setcookie($cookie_name, $cookie_value, $expiration_time, $secureOnly, true);

echo "secure cookie name 'my_cookie' has been set";

// ************write a php script to display a welcome mesage *********

$cookie_name  = "visited";

if(isset($_COOKIE[$cookie_name])){

    echo "welcome Back! you have visited before.'<br>'";
}else{

  echo " This is your first visit.'<br>'";
}

// ************* write a php script to store an array in session variable*********

session_start();

$userpreference = array(
    "theme"=> "light",
    "languge"=> "English",
    "Notification"=>"true"
);

$_SESSION['preferences'] = $userpreference;

echo "user preferences has been stored in the session variable 'preferences'.";


// ******** write  a php script to retrieve and display a user preferences that  store in t

if(isset($_SESSION['preferences'])){
    $userpreference = $_SESSION['preferences'];
    echo $userpreference;
    foreach($userpreference as $key => $value){

     echo $key . " : ". $value."<br>";
    }
}

// *******Write a PHP script to set a session timeout after 30 minutes of inactivity.*****

$sessiontimeout = 1800;

if(isset($_SESSION['LastActiivity'])){
    $lastActivity = $_SESSION['LastActiivity'];
    $currenttime = time();
    $timeSincelastactivity = $currenttime - $lastActivity;
    // Check if timesincelastaxtivity  exceeded the timeout duratiion 

    if($timeSincelastactivity>$sessiontimeout){
        session_unset();
        session_destroy();
        echo "session expired plzz login Again";
    }else{
        $_SESSION['LastActiivity'] = $currenttime;

        echo "Session Active.";
    }
}else{

    $_SESSION['LastActiivity'] = time();

    echo "Session Started.";

}


// ***********PHP script to display the number of active sessions on the server.

$sessionSavepath = session_save_path();

$sessionfiles = glob($sessionSavepath . '/*');

$activesession = 0;

// **********write a php script to count  a total number of session *********************

session_start();

if(isset($_SESSION['session_count'])){
    
    $_SESSION['session_count'] = 1;
        
    
}else{

    $_SESSION['session_count']++;

if($_SESSION['session_count']>$max_session){
    session_unset();
    session_destroy();
    echo "Max sessiion Limit exeed . plzz login again.";
    exit();
}

}

echo "session active.sessiion account: ". $_SESSION['session_count'];


// **********PHP script to regenerate the session ID to prevent session fixation attacks.


session_start();

session_regenerate_id(true);

echo " session Id has been regenrated";


// ******write a php script to display the last time the 

session_start();

if(isset($_SESSION['last_acess_time'])){
    $last_acess_time = $_SESSION['last_acess_time'];
}









