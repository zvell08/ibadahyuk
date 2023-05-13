<?php
include_once "auth/connect.php";

class login
{
    public $email;
    public $password;

    public function __construct($em, $ps){
        $this->email = $em;
        $this->password = $ps;
    }
    

}
class register 
{
    public $email;
    public $password;
    public $username;

    public function __construct($em,$ps,$usr){
        $this->email = $em;
        $this->password = $ps;
        $this->username = $usr;
    }
}
 
?>

{
        