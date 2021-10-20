<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col-12">
            <form method="post">
                    <label for="parametro">Buscar por:
                    <select name="parametro" id="parametro">
                        <option value="nombre">Nombre</option>
                        <option value="color">Color</option>
                        <option value="tipo">Tipo</option>
                        <option value="expansion">Expansión</option>
                        <option value="texto">Texto</option>
                    </select><br>

                    <label for="valor">Introduce tu búsqueda:</label>
                    <input type="text" name="valor" id="valor">
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php for($i = 0; $i<count($listaCartas); $i++) {?>
                <div class="col">
                <div class="card h-100" style="max-height: 670px; overflow: scroll;">
                <div class="card-header"><?php echo $listaCartas[$i]['nombre'] ?></div>
                <div class="card-body">
                <?php if($listaCartas[$i]['img2'] != NULL) { ?>
          <div id=<?php echo "front$i" ?> class="front visible" style="text-align: center;"><img class="front" src="<?php echo $listaCartas[$i]['img'] ?>"></div>
          <div id=<?php echo "back$i" ?> class="back flipped" style="text-align: center;"><img class="front" src="<?php echo $listaCartas[$i]['img2'] ?>"></div><br>
          <div style="text-align: center;"><button onclick="reply_click(this.id)" id=<?php echo "flip$i" ?> style="margin: 5px auto;"><img src="vistas/img/swap.png" /></button></div>
        <?php } else if($listaCartas[$i]['img2'] == NULL) { ?>
          <div style="text-align: center;"><img class="front" id="img" src="<?php echo $listaCartas[$i]['img'] ?>"></div>
        <?php } ?>
                    <p class="card-text"><?php echo $listaCartas[$i]['texto'] ?></p>
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
                    <?php if ($listaCartas[$i]['poder'] != null) {?>
                        <p style="text-align: right;"><?php echo $listaCartas[$i]['poder'] ?> / <?php echo $listaCartas[$i]['dureza'] ?></p>
                    <?php } else if ($listaCartas[$i]['lealtad'] != null) {?>
                        <p style="text-align: right;"><?php echo $listaCartas[$i]['lealtad'] ?></p>
                    <?php }?>
                </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
    <script src="vistas/js/juego.js"></script>
</body>
</html>