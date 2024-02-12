<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/head.php");
require_once('c://xampp/htdocs/CrudUsersBasic/controller/usernameController.php');
$obj = new usernameController();
$allData = $obj->index();
?>

<div class="mb-3">
    <a href="create.php" class="btn btn-primary">Agregar Nuevo usuario</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php if ($allData) : ?>
            <?php foreach ($allData as $data) : ?>
                <tr>
                    <th><?= $data["id"] ?></th>
                    <th><?= $data["name"] ?></th>
                    <th class="">
                        <a href="show.php?id=<?= $data["id"] ?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $data["id"] ?>" class="btn btn-success">Actualizar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $data["id"] ?>">Eliminar</a>

                        <div class="modal fade" id="exampleModal<?= $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="">Estas seguro de eliminar a <?= $data["name"] ?></span>
                                        <br></br>
                                        <span>Una vez eliminado no se podra recuperar el Usuario</span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                        <a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
            <tr>
                <td colspan="3" class="text-center"> No hay registros</td>
            </tr>
        <?php endif ?>

    </tbody>
</table>
<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/footer.php");

?>