<?php
    require "../SharedController/DataModel.php";

    class LoginModel extends DataModel{
        function __construct(){
            parent ::__construct();
        }

        function logindetails($username,$userpassword){
            $stmt = $this->connection->prepare("SELECT user, pwd  FROM logindata WHERE user=:username AND pwd=:userpassword");
            $stmt->bindParam("username", $username, PDO::PARAM_STR);
            $stmt->bindParam("userpassword", $userpassword, PDO::PARAM_STR);
            // $stmt->execute({
            //     username: $username,
            //     userpassword: $userpassword
            // });
            return $stmt;
        }
    }
?>
