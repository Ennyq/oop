<?php 

require "config.php";

function connect(){
    $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if($mysqli->connect_errno !=0){
        $error = $mysqli->connect_error;
        $error_date = date("F j, Y, g:i a");
        $message = "{$error} | {$error_date} \r\n";
        file_put_contents("db-log.txt", $message, FILE_APPEND);
        
        return false;

    }else{
            return $mysqli;

        }

    }



function registerUser($email, $username, $password, $confirm_password){
    $mysqli = connect();
    $args = func_get_args();

    $args = array_map(function($value){
        return trim($value);
    }, $args);

    foreach ($args as $value){
        if(empty($value)){
            return "All fields are required";
        }
    }

    foreach ($args as $value){
        if(preg_match("/([<|>])/", $value)){
            return "<> characters are not allowed";
        }
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "Email is not valid";
    }

    $stmt = $mysqli->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if($data != NULL){
        return "Email already exist, please use a different username";
    }

    if(strlen($username) > 50){
        return "Username is to long";
    }

    $stmt = $mysqli->prepare("SELECT username FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if($data != NULL){
        return "Username already exist, please use a different username";
    }
    

    if(strlen($password ) > 50){
        return "Password is to long";

    }


    if($password != $confirm_password){
        return "Password don't match";
    }
    
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt =$mysqli->prepare("INSERT INTO users(username, password, email) VALUES (?,?,?)");
    $stmt->bind_param("sss", $username ,$hashed_password, $email);
    $stmt->execute();
    
    if($stmt->affected_rows != 1){
        return "An error has occured. Please try again";
    
    }
    
    else{
        return "success";
    }
    
    
}



function loginUser($username, $password){

    $mysqli = connect();

    $username = trim($username);

    $password = trim($password);

    if($username == "" || $password == ""){
        return "Both fields are required";
    }

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);


    $sql = "SELECT username, password FROM users WHERE username =?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if($data == NULL){
        return "Wrong username or password";
    }

    if(password_verify($password, $data["password"]) == FALSE){
        return "Wrong username or password";

    } else {
         $_SESSION["user"] = $username;
         header("location: jjk.php");

         exit();
    }


}

function logoutUser(){

    session_destroy();
    header("location: index.php");

    exit();
}

function passwordReset(){}

function deleteAccount(){}





?>