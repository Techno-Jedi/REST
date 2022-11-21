<?php
require_once("classes/DB.php");
require_once("classes/Model.php");
class Users extends Model
{
    public function createUser($name)
    {
        Database::query("INSERT INTO users (name) VALUES ('" . $name . "')");
    }

    public function getUser($id)
    {
        $query = Database::query("SELECT * FROM `users` WHERE id = " . $id);
        $users = Database::fetch($query);
        return json_encode($users);
    }

    public function updateUser($data)
    {
        $query = Database::query("UPDATE `users` SET `name`= '" . $data['name'] . "' WHERE `id` = " . $data['id']);
    }

    public function deleteUser($id)
    {
        $query = Database::query("DELETE FROM `users` WHERE `users`.`id`= " . $id);
    }
}