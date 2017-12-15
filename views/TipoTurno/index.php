<div class="container">
    <?php print_r($data['tipoTurnos']); ?>
    <form action="index.php?controller=TipoTurno&action=save" method="post">
        <div class="form-group">
            <input type="hidden" name="codigo">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre..." />
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>