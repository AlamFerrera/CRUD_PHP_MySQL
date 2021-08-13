
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
            <td class="text-center"><?= $resultado['created_at'] ?></td>
            <td class="text-center"></td>
        </tr>
        <?php }
    ?>
    </tbody>
</table>