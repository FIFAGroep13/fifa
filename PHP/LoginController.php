<?php
require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)){
    $sql = "SELECT email, password FROM tbl_admins WHERE email = :email";
    if($stmt = $dbh->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $password = $row['password'];
                        if($password == $row['password']){
                            /* Password is correct, so start a new session and
                            save the email to the session */

                            $_SESSION['email'] = $email_loggedin;      
                            $_SESSION['loggedin'] = true;
                            header("Location: admin.php?messages=Welkom, je bent aangemeld bij FIFA!");
                            
                        } else{
                            // Display an error message if password is not valid
                            header("Location: index.php?messages=Je Account bestaat niet!");
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    header("Location: index.php?messages=Je Account bestaat niet!");
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
    }