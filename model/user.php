<?php
require_once "lib/database.php";

class User extends Database
{
    var $dbname = "users";
     var $error = "";
    public function __construct()
    {

        $this->connect();

    }

    public function login($login,$password)
    {

        $user = $this->db->query("SELECT * FROM ".$this->dbname." WHERE email = '$login' OR username ='$login'");

        if($user->num_rows == 0){
            return false; // if the record does not match stop execution
        }else{
            $user = $user->fetch_array();

            if($password == $user['password']) return $user;
        }

    }

    public function createUser($fullname,$username,$email,$password)
    {

        if($this->validateUser($fullname, $username, $email, $password) === true)
        {
            return false;
        }
       return  $this->db->query("INSERT INTO ".$this->dbname." SET fullname='$fullname',username='$username',email='$email',password='$password'");

    }

    

    public function validateUser($fullname, $username, $email, $password)
    {
        $error_status = FALSE;
        
        if(empty($fullname))
        {
            $this->error.="Please input your fullname <br/>";
            $error_status = true;
        }

        if(empty($username))
        {
            $this->error.="Please input your username <br/>";
            $error_status = true;
        }

        if(empty($email))
        {
            $this->error.="Please input your email <br/>";
            $error_status = true;
        }

        if(empty($password))
        {
            $this->error.="Please input your password <br/>";
            $error_status = true;
        }

        return  $error_status;
    }

    public function getUser($id)
    {

        return $this->db->query("SELECT * FROM ".$this->dbname." WHERE id = ".$id);

    }

    public function updateUser($id,$fullname,$username,$email,$password)
    {

        return $this->db->query("UPDATE ".$this->dbname." SET fullname='$fullname', username='$username', email='$email', password='$password' WHERE id = $id");

    }

    public function getUsers()
    {

        return $this->db->query("SELECT * FROM".$this->dbname);

    }

    public function destroy($id)
    {

        return $this->db->query("DELETE * FROM".$this->dbname." WHERE id = '$id'");

    }
}

?>