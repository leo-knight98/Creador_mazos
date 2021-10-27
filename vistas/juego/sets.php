<div class="card card-sets">
    <div class="card-header">
        Sets existentes
    </div>
    <div class="card-body">
        <table class="table-bordered tabla-sets">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Símbolo</th>
                    <th>Fecha de lanzamiento</th>
                    <th>Código</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaSets as $set) { ?>
                    <tr>
                        <td style="width: 250px;"><?php echo $set['nombre']; ?></td>
                        <td><a href="?controlador=juego&accion=cartas_set&id=<?php echo $set['id'] ?>"><img src="<?php echo $set['simbolo'] ?>" style="width: 40px;"></a></td>
                        <td style="width: 175px;"><?php 
                            $fecha = explode(" - ", $set['fecha_lanzamiento']);

                            if(count($fecha) == 2) {
                                echo "$fecha[1] - $fecha[0]";
                            } else {
                                echo "$fecha[2] - $fecha[1] - $fecha[0]";
                            }
                        ?></td>
                        <td><?php echo $set['codigo'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>