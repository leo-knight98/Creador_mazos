<div class="container">
  <h4 class="card-title">Mi mazo</h4>
<div class="row row-cols-1 row-cols-md-3 g-4">
<!-- <?php foreach($lista as $carta) { ?>
    <div class="col">
    <div class="card h-100" style="max-height: 670px; overflow: scroll;">
      <div class="card-header"><?php echo $carta['nombre'] ?></div>
      <div class="card-body">
        <div style="text-align: center;"><img src="<?php echo $carta['img'] ?>" style="height: 200px;"></div>
        <p class="card-text" style="text-align: justify;"><?php echo $carta['texto'] ?></p>
        <ul>
            <li>Coste: <?php 
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
            
            
            ?></li>
            <li>Color: <?php echo $carta['color'] ?></li>
            <li>Tipo: <?php echo $carta['tipo'] ?></li>
            <li>Expansión: <?php echo $carta['expansion'] ?></li>
            <li>Rareza: <?php echo $carta['rareza'] ?></li>
        </ul>
        <?php if ($carta['poder'] != NULL) { ?>
            <p style="text-align: right;"><?php echo $carta['poder'] ?> / <?php echo $carta['dureza'] ?></p>
        <?php } else if ($carta['lealtad'] != NULL) { ?>
            <p style="text-align: right;"><?php echo $carta['lealtad'] ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>
</div> -->

</div>
<footer style="height: 150px;"></footer>