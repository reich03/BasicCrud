<?php

class UsernameModel
{
    private $PDO;

    //Obtener conexion y almacenarla
    public function __construct()
    {
        require_once("c://xampp/htdocs/CrudUsersBasic/config/db.php");
        $conn = new db();
        $this->PDO = $conn->connection();
    }

    //Funcion que crea un estado, que coje al objeto lo prepara con una consulta, donde se le pasara el id nulo ya que se autogenera, y el nombre usando :nombre para no pasar una variable en consulta, luego de eso usando bindParam, reemplazaremos el valor :nombre, con la variable nombre
    public function insertName($nombre)
    {
        $statement = $this->PDO->prepare("INSERT INTO username VALUES(null,:nombre) ");
        $statement->bindParam(":nombre", $nombre);
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function showName($id)
    {
        $statement = $this->PDO->prepare("SELECT *  FROM  username  WHERE id = :id limit 1 ");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }
    public function index()
    {
        $statement = $this->PDO->prepare("SELECT *  FROM  username ");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }


    public function update($id, $name)
    {
        $statement = $this->PDO->prepare("UPDATE username SET name=:name WHERE id=:id");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":id", $id);

        return ($statement->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $statement = $this->PDO->prepare("DELETE FROM username WHERE id=:id");
        $statement->bindParam(":id", $id);

        return ($statement->execute() ? true : false);
    }
}
