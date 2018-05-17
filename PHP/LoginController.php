<?php
require_once('config.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
try
       {
          $stmt = $dbh->prepare("SELECT * FROM tbl_admins WHERE email =:email AND password=:password");
          $stmt->execute(array(':email'=>$email, ':password'=>$password));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['user_pass']))
             {
                $_SESSION['user_session'] = $userRow['user_id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }