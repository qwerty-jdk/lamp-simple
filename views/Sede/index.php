<div class="container">
    <?php

    $empresas = $data['data']['empresas'];
    $sedes = $data['data']['sedes'];
    print_r($sedes);

    ?>
    <form action="index.php?controller=Turno&action=save" method="post">
        <input type="hidden" name="codigo">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" />
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+569XXXXXXX" />
        </div>
        <div class="form-group">
            <label for="calle">Calle</label>
            <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle" />
        </div>
        <div class="form-group">
            <label for="numero">Número</label>
            <input type="text" class="form-control" name="numero" id="numero" placeholder="Número" />
        </div>
        <div class="form-group">
            <label for="comuna">Comuna</label>
            <input type="text" class="form-control" name="comuna" id="comuna" placeholder="Comuna" />
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" />
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>