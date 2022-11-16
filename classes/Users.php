<?php
require_once("classes/DB.php");
require_once("classes/Model.php");
class Users extends Model{
     public function createUser($name){
        Database::query("INSERT INTO users (name) VALUES ('" . $name . "')");
    } 

    public function getUser(){
       $query = Database::query( "SELECT * FROM `users` WHERE 1");
        $users =[];
        while($row = Database::fetch($query)){
            $users[] = $row;
          };
          return $users;
     }
    public function updateUser($name){
      $user = Database::query( "UPDATE `users` SET `id`='[value-1]',`name`='[value-2]' WHERE 1");
    return $user;
    } 

    public function deleteUser(){
        Database::query( "DELETE FROM `users` WHERE id");
    }
}