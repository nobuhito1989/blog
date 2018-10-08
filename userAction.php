<?php 

        require_once("classes/Users.php");

        $user = new User;

        if(isset($_POST['add'])){
        $username= $_POST['username'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        

        if($msg != null){
            session_start();
            //set error message
            $_SESSION['msg'] = $msg;
            //redirect url
            header("location: adduser.php");
        }else{
        $user->createUser($username,$password,$email);
        }
    }
        
        elseif(isset($_POST['edit'])){
              $id = $_POST['id'];
              $username= $_POST['username'];
              $email=$_POST['email'];
        
              $user->updateUser($id,$username,$email);
        }



        elseif(isset($_POST['login'])){
        $username= $_POST['username'];
        $email= $_POST['email'];
        $pass=$_POST['pass'];
        $password= md5($pass);

        $user->loginUser($username,$password,$email);
    }
 

?>