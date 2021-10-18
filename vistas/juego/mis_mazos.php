<div class="card">
    <div class="card-header">
        Mis mazos
    </div>
    <div class="card-body">
        <a name="" id="" class="btn btn-success" href="?controlador=juego&accion=crear_mazo" role="button">Crear mazo</a>
        <table class="table table-striped table-responsive">
            <thead class="thead-default">
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($mazos as $mazo) { ?>
                        <tr>
                            <td><?php echo $mazo['nombre'] ?>
                            <td>
                                <a name="" id="" class="btn btn-success" href="?controlador=juego&accion=ver_cartas&id=<?php echo $mazo['id'] ?>" role="button">Ver</a>
                                <a name="" id="" class="btn btn-info" href="?controlador=juego&accion=agregar_cartas&id=<?php echo $mazo['id'] ?>" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="?controlador=juego&accion=borrar_mazo&id=<?php echo $mazo['id'] ?>" role="button">Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table> 
    </div>
</div>