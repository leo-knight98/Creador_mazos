<?php session_start() ?>
<div class="container">
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach($listaCartas as $carta) { ?>
    <div class="col">
    <div class="card h-100" style="max-height: 670px; overflow: scroll;">
      <div class="card-header"><?php echo $carta['nombre'] ?></div>
      <div class="card-body">
        <div style="text-align: center;"><img src="<?php echo $carta['img'] ?>" style="height: 250px;"></div>
        <p class="card-text"><?php echo $carta['texto'] ?></p>
        <ul>
            <li>Coste: <?php echo $carta['coste'] ?></li>
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

        <form method="post">
          <label for="cantidad">Cantidad:</label>
          <input type="number" name="cantidad" id="cantidad" max="4" /><br>
          <input type="submit" name="submit" id="submit" class="btn btn-success" value="Agregar al mazo"/>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>
<footer style="height: 150px;"></footer>