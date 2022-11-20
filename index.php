<?php
require_once("classes/DB.php");
require_once("classes/Users.php");
require_once("classes/Model.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET["id"])) {
    $user = new Users();
    $showUsers = $user->getUser();
    echo "<pre>";
    print_r($showUsers);
    echo "</pre>";
  } else {
    echo "Hola";
  }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = new Users();
  $data = file_get_contents("php://input");
  $user->createUser($data);
  $showUsers = $user->getUser();
  echo "<pre>";
  print_r($showUsers);
  echo "</pre>";

} else if ($_SERVER["REQUEST_METHOD"] == "PUT") {
  $user = new Users();
  $showUsers = $user->getUser();
  $data = file_get_contents("php://input");
  print_r($data);
  $user->updateUser($data);
} else if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
  $user = new Users();
  $id = file_get_contents("php://input");
  $user->deleteUser($id);
}