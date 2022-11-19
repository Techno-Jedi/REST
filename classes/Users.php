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
            $query = Database::query( "UPDATE `users` SET `name`= '$name'  WHERE `users`.`id` = '56'");
             $users =[];
             while($row = Database::fetch($query)){
                 $users[] = $row;
               };
               return json_encode($users);
        }
        public function deleteUser(){
                    $query = Database::query( "DELETE FROM `users` WHERE id=68 ");
                }
}