<?php
require_once("classes/DB.php");
require_once("classes/Users.php");
if(isset($_REQUEST["name"])){
    $_REQUEST["name"];
$user = new Users();
$user->createUser($_REQUEST["name"] );
$showUsers = $user->getUser();
  echo "<pre>";
  print_r($showUsers);
  echo "</pre>";
}
