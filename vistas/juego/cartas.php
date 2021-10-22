<div class="container">
  <h4 class="card-title">Lista de cartas</h4>

    <p>Ordenar por:</p>
    <form method="post">
        <input type="radio" name="orden" id="nombre" value="nombre"><label for="nombre">Nombre</label>
        <input type="radio" name="orden" id="tipo" value="tipo"><label for="tipo">Tipo</label>
        <input type="radio" name="orden" id="color" value="color"><label for="color">Color</label>
        <input type="submit" class="btn btn-success" value="Enviar">
    </form><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php for ($i = 0; $i < $listaCartas[$i]; $i++) {
            if(strpos($listaCartas[$i]['nombre'], "//") != false) {
                $nombres = explode("//", $listaCartas[$i]['nombre']);
                $nombreFront = $nombres[0];
                $nombreBack = $nombres[1];
            } else {
                $nombre = $listaCartas[$i]['nombre'];
            }

            if($listaCartas[$i]['img2'] != null) {
                $imgFront = $listaCartas[$i]['img'];
                $imgBack = $listaCartas[$i]['img2'];
            } else {
                $img = $listaCartas[$i]['img'];
            }

            if(strpos($listaCartas[$i]['texto'], "//") != false) {
                $textos = explode("//", $listaCartas[$i]['texto']);
                $textoFront = $textos[0];
                $textoBack = $textos[1];
            } else {
                $texto = $listaCartas[$i]['texto'];
            }

            $costes = explode(" ", $listaCartas[$i]['coste']);
            $coste = "";
            foreach($costes as $costeUnidad) {

                switch ($costeUnidad) {
                    case("{W}"):
                        $coste .= str_replace("{W}", '<img src="vistas/img/white_mana.png" />', $costeUnidad);
                        break;
                    case("{B}"):
                        $coste .= str_replace("{B}", '<img src="vistas/img/black_mana.png" />', $costeUnidad);
                        break;
                    case("{G}"):
                        $coste .= str_replace("{G}", '<img src="vistas/img/green_mana.png" />', $costeUnidad);
                        break;
                    case("{R}"):
                        $coste .= str_replace("{R}", '<img src="vistas/img/red_mana.png" />', $costeUnidad);
                        break;
                    case("{U}"):
                        $coste .= str_replace("{U}", '<img src="vistas/img/blue_mana.png" />', $costeUnidad);
                        break;
                    default:
                        $coste .= $costeUnidad;
                        break;
                }
            }

            if(strpos($coste, "//") != false) {
                $dos_costes = explode("//", $coste);
            }

            if(strpos($listaCartas[$i]['color'], "//") != false) {
                $colores = explode("//", $listaCartas[$i]['color']);
            } else {
                $color = $listaCartas[$i]['color'];
            }
            
            if(strpos($listaCartas[$i]['tipo'], "//") != false) {
                $tipos = explode("//", $listaCartas[$i]['tipo']);
            } else {
                $tipo = $listaCartas[$i]['tipo'];
            }

            $expansion = $listaCartas[$i]['expansion'];
            $rareza = $listaCartas[$i]['rareza'];

            if(strpos($listaCartas[$i]['poder'], "//") != false) {
                $poderes = explode("//", $listaCartas[$i]['poder']);
                $durezas = explode("//", $listaCartas[$i]['dureza']);
            } else {
                $poder = $listaCartas[$i]['poder'];
                $dureza = $listaCartas[$i]['dureza'];
            }
            ?>
            <?php if(strpos($listaCartas[$i]['nombre'], "//") != false) { ?>
                <!-- Front -->
                <div id="<?php echo 'front'.$i ?>" class="col visible">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php echo $nombreFront ?>
                        </div>
                        <div class="card-body">
                            <button onclick="reply_click(this.id)" id=<?php echo "flip$i" ?>><img src="vistas/img/swap.png" /></button>
                            <div class="img-card"><img src="<?php echo $imgFront ?>" /></div><br>
                            <p class="text"><?php echo $textoFront ?></p>
                            <ul>
                                <li>
                                    <?php if(strpos($coste, "//") != false) {
                                        echo "Coste: $dos_costes[0]";
                                    } else {
                                        echo "Coste: $coste";
                                    } ?>
                                </li>
                                <li>
                                    <?php if(strpos($listaCartas[$i]['color'], "//") != false) {
                                        echo "Color: $colores[0]";
                                    } else {
                                        echo "Color: $color";
                                    } ?>
                                </li>
                                <li>Tipo: 
                                    <?php if(strpos($listaCartas[$i]['tipo'], "//") != false) {
                                        echo $tipos[0];
                                    } else {
                                        echo $tipo;
                                    }?>
                                </li>
                                <li>Expansión: <?php echo $expansion ?></li>
                                <li>Rareza: <?php echo $rareza ?></li>
                            </ul>
                            <div class="stats">
                                <?php if($listaCartas[$i]['poder'] != null) {
                                    if(strpos($listaCartas[$i]['poder'], "//") != false) {
                                        echo "$poderes[0] / $durezas[0]";
                                    } else {
                                        echo "$poder / $dureza";
                                    }
                                } else if($listaCartas[$i]['lealtad'] != null) {
                                    echo $listaCartas[$i]['lealtad'];
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Back -->
                <div id="<?php echo 'back'.$i ?>" class="col flipped">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php echo $nombreBack ?>
                        </div>
                        <div class="card-body">
                            <button onclick="reply_click(this.id)" id=<?php echo "flip$i" ?>><img src="vistas/img/swap.png" /></button>
                            <div class="img-card"><img src="<?php echo $imgBack ?>" /></div><br>
                            <p class="text"><?php echo $textoBack ?></p>
                            <ul>
                                <?php if(strpos($coste, "//") != false) {
                                    echo "<li>Coste: $dos_costes[1]</li>";
                                } ?>
                                <li>
                                    <?php if(strpos($listaCartas[$i]['color'], "//") != false) {
                                        echo "Color: $colores[1]";
                                    } else {
                                        echo "Color: $color";
                                    } ?>
                                </li>
                                <li>Tipo:
                                    <?php if(strpos($listaCartas[$i]['tipo'], "//") != false) {
                                        echo $tipos[1];
                                    } else {
                                        echo $tipo;
                                    }?>
                                </li>
                                <li>Expansión: <?php echo $expansion ?></li>
                                <li>Rareza: <?php echo $rareza ?></li>
                            </ul>
                            <div class="stats">
                            <?php if($listaCartas[$i]['poder'] != null) {
                                    if(strpos($listaCartas[$i]['poder'], "//") != false) {
                                        echo "$poderes[1] / $durezas[1]";
                                    }
                                } else if($listaCartas[$i]['lealtad'] != null) {
                                    echo $listaCartas[$i]['lealtad'];
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <!-- una cara -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-header">
                            <?php echo $nombre ?>
                        </div>
                        <div class="card-body">
                            <div class="img-card"><img src="<?php echo $img ?>" /></div><br>
                            <p class="text"><?php echo $texto ?></p>
                            <ul>
                                <li><?php echo "Coste: $coste" ?></li>
                                <li><?php echo "Color: $color" ?></li>
                                <li>Tipo: <?php echo $tipo ?></li>
                                <li>Expansión: <?php echo $expansion ?></li>
                                <li>Rareza: <?php echo $rareza ?></li>
                            </ul>
                            <div class="stats">
                                <?php if($listaCartas[$i]['poder'] != null) {
                                    echo "$poder / $dureza";
                                } else if ($listaCartas[$i]['lealtad'] != null) {
                                    echo $listaCartas[$i]['lealtad'];
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Acaba if cartes -->
            <?php } ?> 
        <!-- Acaba for -->
        <?php } ?>
    </div>
</div>
<script src="vistas/js/juego.js"></script>