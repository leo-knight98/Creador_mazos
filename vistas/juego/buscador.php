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
                    </select><br>

                    <label for="valor">Introduce tu búsqueda:</label>
                    <input type="text" name="valor" id="valor">
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($cartas as $carta) {?>
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
                    <?php if ($carta['poder'] != null) {?>
                        <p style="text-align: right;"><?php echo $carta['poder'] ?> / <?php echo $carta['dureza'] ?></p>
                    <?php } else if ($carta['lealtad'] != null) {?>
                        <p style="text-align: right;"><?php echo $carta['lealtad'] ?></p>
                    <?php }?>
                </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</body>
</html>