<div class="container">
  <h4 class="card-title">Lista de cartas</h4>

  <p>Ordenar por:</p>
  <form method="post">
    <input type="radio" name="orden" id="nombre" value="nombre"><label for="nombre">Nombre</label>
    <input type="radio" name="orden" id="tipo" value="tipo"><label for="tipo">Tipo</label>
    <input type="radio" name="orden" id="color" value="color"><label for="color">Color</label>
    <input type="submit" class="btn btn-success" value="Enviar">
</form>
<div class="row row-cols-1 row-cols-md-3 g-4">
    
    <!-- for cartas -->
    <?php 
        for($i = 0; $i < count($listaCartas); $i++) {
        if($listaCartas[$i]['img2'] != NULL) { 
            $nombres = explode("//", $listaCartas[$i]['nombre']);
            $textos = explode("//", $listaCartas[$i]['texto']);
            ?>
            <div class="col">
            <div id=<?php echo "front$i" ?> class="card h-100 visible" style="overflow: scroll; height: 600px;">
            <div class="card-header">
                <?php echo $nombres[0] ?>
            </div>
            <div class="card-body">
                <div style="text-align: center;"><img src=<?php echo $listaCartas[$i]['img'] ?> style="height: 265px;" /><br>
                <button id=<?php echo "flip$i" ?> ><img src="vistas/img/swap.png" /></button></div>
                <p><?php echo $textos[0] ?></p>
            </div>
        </div>
        </div>
        <div id=<?php echo "back$i" ?> class="card h-100 flipped" style="overflow: scroll; height: 600px;">
            <div class="card-header">
                <?php echo $nombres[1] ?>
            </div>
            <div class="card-body">
                <div style="text-align: center;"><img src=<?php echo $listaCartas[$i]['img2'] ?> style="height: 265px;" /></div>

                <p><?php echo $textos[1] ?></p>
            </div>
        </div>
        <?php } else { ?>
            <div class="col">
            <div class="card h-100" style="overflow: scroll; height: 600px;">
            <div class="card-header">
                <?php echo $listaCartas[$i]['nombre'] ?>
            </div>
            <div class="card-body">
            <div style="text-align: center;"><img src=<?php echo $listaCartas[$i]['img'] ?> style="height: 265px;" /></div>
            <p><?php echo $listaCartas[$i]['texto'] ?></p>
            <ul>
                <li>Coste: <?php 
                $costes = explode(" ", $listaCartas[$i]['coste']);
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
                
                ?></li>
                <li>Color: <?php echo $listaCartas[$i]['color'] ?></li>
                <li>Tipo: <?php echo $listaCartas[$i]['tipo'] ?></li>
                <li>Expansión: <?php echo $listaCartas[$i]['expansion'] ?></li>
                <li>Rareza: <?php echo $listaCartas[$i]['rareza'] ?></li>
            </ul>
            </div>
        </div>
        </div>
        <?php } ?>
        

        
        <?php }
    ?>
    <!-- acaba for cartas -->
    <script src="vistas/js/juego.js"></script>
</div>