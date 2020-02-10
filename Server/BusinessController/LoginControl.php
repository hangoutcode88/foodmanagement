<?php

    require "../DatabaseModel/LoginModel.php";  

    class LoginControl extends LoginModel {
        function __construct() {
            parent :: __construct();
        }
        
        public function loginvalues($username,$userpassword){
            $result=$this->logindetails($username,$userpassword);
            $result->execute();
            if ($result->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
