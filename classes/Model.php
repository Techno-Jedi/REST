<?php
require_once("classes/DB.php");
class Model{
public function __construct(){
    Database::connect();
}
}