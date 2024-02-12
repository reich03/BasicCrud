<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/head.php");
require_once("c://xampp/htdocs/CrudUsersBasic/controller/usernameController.php");
$obj = new usernameController();
$date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Detalles del registro</h2>
<div class="container-fluid">
    <div class="pb-3">
        <a href="/CRUDUSERSBASIC/index.php" class="btn btn-primary">Regresar</a>
        <a href="edit.php?id=<?= $date["id"] ?>" class="btn btn-success">actualizar</a>
        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="">Estas seguro de eliminar a <?= $date[1] ?></span>
                        <br></br>
                        <span>Una vez eliminado no se podra recuperar el Usuario</span>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                        <a href="delete.php?id=<?= $date[0] ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table container-fluid">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col"><?= $date["id"] ?></td>
                <td scope="col"><?= $date["name"] ?></td>

            </tr>
        </tbody>
    </table>
</div>
<?php
require_once("c://xampp/htdocs/CrudUsersBasic/view/head/footer.php");
?>