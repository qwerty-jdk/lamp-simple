<div class="container">
    <?php

    $turnos = $data['data']['turnos'];
    $tipoTurnos = $data['data']['tipoTurnos'];
    print_r($turnos);

    ?>
    <form action="index.php?controller=Turno&action=save" method="post">
        <input type="hidden" name="codigo">
        <div class="form-group">
            <label for="exampleInputFile">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="exampleInputFile" placeholder="Nombre" />
        </div>

        <div class="form-group">
            <label for="tipo_turno">Turno</label>
            <select class="form-control" name="tipo_turno" id="tipo_turno" placeholder="Turno" />
            <?php for($i = 0; $i < count($tipoTurnos); $i++){
                echo '<option value='.$tipoTurnos[$i]['CODIGO'].'>'.$tipoTurnos[$i]['NOMBRE'].'</option>';
            } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>