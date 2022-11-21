<?php
require_once("classes/DB.php");
require_once("classes/Users.php");
require_once("classes/Model.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_REQUEST["id"])) {
    $user = new Users();
    $showUsers = $user->getUser($_REQUEST["id"]);
    echo "<pre>";
    print_r($showUsers);
    echo "</pre>";
  } else {
    echo "Hola";
  }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = new Users();
  $user->createUser($_REQUEST["name"]);

} else if ($_SERVER["REQUEST_METHOD"] == "PUT") {
  $user = new Users();
  $data = ['id'=>$_REQUEST["id"], 'name'=>$_REQUEST["name"]];
  $user->updateUser($data);

} else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
  $user = new Users();
  $user->deleteUser($_REQUEST["id"]);
}