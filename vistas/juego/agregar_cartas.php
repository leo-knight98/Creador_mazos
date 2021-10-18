<div class="card">
    <div class="card-header">
        Creador de mazos
    </div>
    <div class="card-body">
        <div class="form" style="text-align: right;">
        <form method="post">
            <input type="text" name="carta" id="carta">
            <input type="submit" class="btn btn-success" value="Buscar">
        </form>
        </div>
            
            <div class="col">
                <table class="table table-bordered table-responsive">
                    <thead class="thead-default">
                        <tr>
                            <th>Nombre</th>
                            <th>Color</th>
                            <th>Coste</th>
                            <th>Tipo</th>
                            <th>Expansión</th>
                            <th>Rareza</th>
                            <th style="width: 600px;">Texto</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($cartas as $carta) { ?>
                            <tr>
                                <td>
                                    <a href="#">
                                        <?php echo $carta['nombre'] ?>
                                        <div><img src="<?php echo $carta['img'] ?>" /></div>
                                    </a>
                                </td>
                                <td><?php echo $carta['color'] ?></td>
                                <td><?php 
                        $costes = explode(" ", $carta['coste']);
                        foreach($costes as $coste) {
                            if($coste == "{B}") {
                            echo "<img src=\"vistas/img/black_mana.png\" />";
                            } else if($coste === "{U}") {
                            echo "<img src=\"vistas/img/blue_mana.png\" />";
                            } else if($coste === "{G}") {
                            echo "<img src=\"vistas/img/green_mana.png\" />";
                            } else if($coste === "{R}") {
                            echo "<img src=\"vistas/img/red_mana.png\" />";
                            } else if($coste === "{W}") {
                            echo "<img src=\"vistas/img/white_mana.png\" />";
                            } else {
                            echo $coste;
                            }
                        }
                        ?></td>
                                <td><?php echo $carta['tipo'] ?></td>
                                <td><?php echo $carta['expansion'] ?></td>
                                <td><?php echo $carta['rareza'] ?></td>
                                <td style="width: 600px;"><?php echo $carta['texto'] ?></td>
                                <td>
                                    <form method="post" action="?controlador=juego&accion=agregar_carta">
                                        <input hidden type="number" name="carta" value="<?php echo $carta['id'] ?>" />
                                        <input hidden type="number" name="mazo" value="<?php echo $_GET['id'] ?>" />
                                        <?php if($carta['tipo'] == "Tierra básica") { ?>
                                            <input type="number" name="cantidad" id="cantidad" />
                                        <?php } else { ?>
                                            <input type="number" name="cantidad" id="cantidad" max="4" />
                                        <?php } ?>
                                        
                                        <input type="submit" class="btn btn-success" value="Agregar" />
                                    </form>
                                    <a name="quitar" id="quitar" class="btn btn-danger" href="" role="button">Quitar</a>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                    
                    <h1>Mi mazo</h1>
                    <table class="table table-bordered table-responsive">
                        <thead class="thead-inverse|thead-default">
                            <tr>
                            <th>Nombre</th>
                            <th>Color</th>
                            <th>Coste</th>
                            <th>Tipo</th>
                            <th>Expansión</th>
                            <th>Rareza</th>
                            <th style="width: 600px;">Texto</th>
                            <th>Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($cartas_mazos as $carta) { ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a > div {
        display: none;
    }

    a:hover > div {
        display: block;
    }
</style>