<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name == ""){
    echo "Name is required";
} elseif($email == ""){
    echo "Email is required";
} elseif($password == ""){
    echo "Password is required";
} else{
    $db = new firebaseRDB($databaseURL);
    $retrieved = $db->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieved, 1);

    if(count($data) > 0){
        echo "Email already used";
    }else{
        $insert = $db->insert("/user", [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);
        $result = json_decode($insert, 1);
        if(isset($result['name'])){
            echo "Signup success, please <a href='login.php'>login</a>";

        } else{
            echo "Signup failed";
        }
    }
}
