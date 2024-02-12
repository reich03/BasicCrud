<?php
require_once("c://xampp/htdocs/CrudUsersBasic/controller/usernameController.php");
$obj = new usernameController();
$id = $_POST["id"];
$name = $_POST["newName"];

$obj->update($id, $name);


// $obj->update($_POST["id"],$_POST["newName"]);