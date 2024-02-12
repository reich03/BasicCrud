<?php

class usernameController
{
    private $model;
    public function __construct()
    {
        require_once("c://xampp/htdocs/CrudUsersBasic/model/usernameModel.php");
        $this->model = new UsernameModel();
    }

    public function guardar($nombre)
    {
        $id = $this->model->insertName($nombre);
        return ($id != false) ? header("location:show.php?id=" . $id) : header("location:create.php");
    }

    public function show($id)
    {
        return ($this->model->showName($id) != false) ? $this->model->showName($id) : header("location:index.php");
    }

    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $name)
    {
        return ($this->model->update($id, $name) != false) ? header("location:show.php?id=" . $id) : header("location:index.php");
    }

    public function delete($id){
        return($this->model->delete($id)!=false) ? header("location:index.php"):header("location:show.php?id=".$id);
    }
}
