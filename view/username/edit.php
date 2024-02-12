<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/head.php");
require_once("c://xampp/htdocs/CrudUsersBasic/controller/usernameController.php");
$obj = new usernameController();
$user = $obj->show($_GET['id']);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Modificar Informacion Usuario</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user["id"] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="newName" class="form-control" id="inputPassword" value="<?= $user["name"] ?>">
        </div>
    </div>
    <div>
        <input type="submit" value="Actualizar" class="btn btn-success">
        <a href="show.php?id=<?= $user["id"] ?>" class="btn btn-danger">Cancelar</a>
    </div>
</form>
<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/footer.php");
?>