<div class="card">
    <div class="card-header">
        Mazos del usuario
    </div>
    <div class="card-body">
        <h4 class="card-title">Mis mazos</h4>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($listaMazos as $mazo) { ?>
                        <tr>
                            <td><?php echo $mazo['id']; ?></td>
                            <td><?php echo $mazo['nombre']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
        
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>