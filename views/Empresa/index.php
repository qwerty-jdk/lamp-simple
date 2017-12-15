<div class="container">
    <?php print_r($data['empresas']); ?>
    <form action="index.php?controller=Empresa&action=save" method="post">
        <div class="form-group">
            <label for="rut">RUT</label>
            <input type="text" class="form-control" name="rut" id="rut" placeholder="xxxxxxxx-x" />
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" />
        </div>
        <div class="form-group">
            <label for="razon_social">Razón Social</label>
            <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón social..." />
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>