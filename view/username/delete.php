<?php
require_once("c://xampp/htdocs/CrudUsersBasic/controller/usernameController.php");
$obj = new usernameController();
$obj->delete($_GET['id']);