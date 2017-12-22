<?php

$turnos = $data['data']['turnos'];
$tipoTurnos = $data['data']['tipoTurnos'];
//print_r($turnos);

?>
<div class="container">
    <div class="dashhead">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">Dashboards</h6>
            <h2 class="dashhead-title">Turnos</h2>
        </div>
    </div>

    <div class="flextable table-actions">
        <div class="flextable-item flextable-primary">
            <div class="btn-toolbar-item input-with-icon">
                <input type="text" class="form-control input-block" placeholder="Buscar turno">
                <span class="icon icon-magnifying-glass"></span>
            </div>
        </div>
        <div class="flextable-item">
            <div class="btn-group">
                <a class="nav-link" href="#addPerson" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-add-to-list"></span>
                    </button>
                </a>
                <a class="nav-link" href="#editPerson" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-pencil"></span>
                    </button>
                </a>
                <a class="nav-link" href="#delPerson" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-erase"></span>
                    </button>
                </a>

            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table" data-sort="table">
            <thead>
            <tr>
                <th><input type="checkbox" class="select-all" id="selectAll"></th>
                <th>Nombre</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td><input type="checkbox" class="select-row"></td>
                <td><a href="#">5X2</a></td>
                <td>Administrativo</td>
            </tr>


            <tr>
                <td><input type="checkbox" class="select-row"></td>
                <td><a href="#">6X1</a></td>
                <td>Jornada excepcional</td>
            </tr>

            </tbody>
        </table>


        <div class="text-center">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Atras</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <div id="addPerson" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Agregar turno</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="editPerson" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar turno</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="delPerson" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Borrar turno</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Está seguro de borrar el turno</p>
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action" data-dismiss="modal"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>