<?php
require_once("classes/DB.php");
require_once("classes/Users.php");
require_once("classes/Model.php");
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["id"])){
      $user = new Users();
      $showUsers = $user->getUser();
         echo "<pre>";
         print_r($showUsers);
         echo "</pre>";
    }
    else{
    echo "Hola";}
}
else if($_SERVER["REQUEST_METHOD"] == "POST"){
$user = new Users();
      $user->createUser($_POST["name"]);
      $showUsers = $user->getUser();
         echo "<pre>";
         print_r($showUsers);
         echo "</pre>";
}
else if($_SERVER["REQUEST_METHOD"] == "PUT"){
$user = new Users();
// $user->createUser($_POST["name"]);
$data = file_get_contents("php://input");
      $user->updateUser($data);
         echo "<pre>";
         print_r($user);
         echo "</pre>";
}
else if($_SERVER["REQUEST_METHOD"] == "DELETE"){
$user = new Users();
// $user->createUser($_POST["name"]);
$id = file_get_contents("php://input");
      $user->deleteUser();
         echo "<pre>";
         print_r($user);
         echo "</pre>";
}