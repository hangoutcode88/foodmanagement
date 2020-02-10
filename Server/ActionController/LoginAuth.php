<?php

    require "../BusinessController/LoginControl.php";

    $loginControl = new LoginControl();

    if(isset($_POST["username"]) && isset($_POST["userpassword"])){
       $username = $_POST["username"];
       $userpassword = $_POST["userpassword"];
    //    echo $username."<br>".$userpassword;
    //    die();
       $value = $loginControl->loginvalues($username,$userpassword);
       
       if( $value == true ){
        echo 1;
       }
       else{
        echo 0;
        }
    }
?>
