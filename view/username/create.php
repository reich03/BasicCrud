<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/head.php");

?>

<form action="store.php" method="post" autocomplete="off">
    <div class="form-group mb-3">
        <label for="exampleInputEmail1">UserName</label>
        <input type="text" required name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa Nombre">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/CRUDUSERSBASIC/index.php" class="btn btn-danger">Cancelar</a>
</form>

<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/footer.php");

?>