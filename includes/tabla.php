
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">Titulo</th>
            <th class="text-center">Descripción</th>
            <th class="text-center">Creado</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = "SELECT * FROM task"; 
        $result = mysqli_query($conn, $query);

        foreach($result as $resultado){ ?>
        <tr>
            <td class="text-center"><?= $resultado['titulo'] ?></td>
            <td class="text-center"><?= $resultado['descripcion'] ?></td>
            <td class="text-center"><?= date("d/m/o", strtotime($resultado['created_at']))?></td>
            <td class="text-center">
                <a href="edit.php?id=<?= $resultado['id']?>" name="id" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                </a>
                <form action="delete.php" method="POST" style="display: inline;">
                    <button type="submit" class="btn btn-danger" name="btnSubmit" value="<?= $resultado['id']?>">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        <?php }
    ?>
    </tbody>
</table>