<div class="container">
    <!--<?php print_r($data['empresas']); ?>-->
    <div class="dashhead">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">Dashboards</h6>
            <h2 class="dashhead-title">Sedes</h2>
        </div>

        <div class="btn-toolbar dashhead-toolbar">
            <div class="btn-toolbar-item input-with-icon">
                <input type="text" value="20/12/18 - 22/12/18" class="form-control" data-provide="datepicker">
                <span class="icon icon-calendar"></span>
            </div>
        </div>
    </div>

    <div class="flextable table-actions">
        <div class="flextable-item flextable-primary">
            <div class="btn-toolbar-item input-with-icon">
                <input type="text" class="form-control input-block" placeholder="Buscar sede">
                <span class="icon icon-magnifying-glass"></span>
            </div>
        </div>
        <div class="flextable-item">
            <div class="btn-group">
                <a class="nav-link" href="#addSede" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-add-to-list"></span>
                    </button>
                </a>
                <a class="nav-link" href="#editSede" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-pencil"></span>
                    </button>
                </a>
                <a class="nav-link" href="#delSede" data-toggle="modal">
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
                <th>Empresa</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>Comuna</th>
                <th>Ciudad</th>
                <th>Turno</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td><input type="checkbox" class="select-row"></td>
                <td><a href="#">FLSMIDTH</a></td>
                <td>SALFA</td>
                <td>552834762</td>
                <td>PEDRO AGUIRRE</td>
                <td>1002</td>
                <td>ANTOFAGASTA</td>
                <td>ANTOFAGASTA</td>
                <td>4X4</td>
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

    <div id="addSede" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Agregar sede</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body  modal-body-scroller">
                    <form action="index.php?controller=Turno&action=save" method="post">
                        <input type="hidden" name="codigo">
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <select class="form-control" name="empresa" id="empresa" placeholder="Empresa" />
                            <?php for($i = 0; $i < count($empresas); $i++){
                                echo '<option value='.$empresas[$i]['RUT'].'>'.$empresas[$i]['NOMBRE'].'</option>';
                            } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="CATERPILLAR" />
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+569 98765432" />
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control" name="calle" id="calle" placeholder="Los Alamos" />
                        </div>
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="3356" />
                        </div>
                        <div class="form-group">
                            <label for="comuna">Comuna</label>
                            <input type="text" class="form-control" name="comuna" id="comuna" placeholder="Mejillones" />
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Antofagasta" />
                        </div>
                        <div class="form-group">
                            <label for="turno">Turno</label>
                            <select class="form-control" name="turno" id="turno" placeholder="Turno" />
                            <?php for($i = 0; $i < count($turnos); $i++){
                                echo '<option value='.$turnos[$i]['CODIGO'].'>'.$turnos[$i]['NOMBRE'].'</option>';
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


    <div id="editSede" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar sede</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body  modal-body-scroller">
                    <form action="index.php?controller=Turno&action=save" method="post">
                        <input type="hidden" name="codigo">
                        <div class="form-group">
                            <label for="empresa">Empresa</label>
                            <select class="form-control" name="empresa" id="empresa" placeholder="Empresa" />
                            <?php for($i = 0; $i < count($empresas); $i++){
                                echo '<option value='.$empresas[$i]['RUT'].'>'.$empresas[$i]['NOMBRE'].'</option>';
                            } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="CATERPILLAR" />
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+569 98765432" />
                        </div>
                        <div class="form-group">
                            <label for="calle">Calle</label>
                            <input type="text" class="form-control" name="calle" id="calle" placeholder="Los Alamos" />
                        </div>
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="3356" />
                        </div>
                        <div class="form-group">
                            <label for="comuna">Comuna</label>
                            <input type="text" class="form-control" name="comuna" id="comuna" placeholder="Mejillones" />
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Antofagasta" />
                        </div>
                        <div class="form-group">
                            <label for="turno">Turno</label>
                            <select class="form-control" name="turno" id="turno" placeholder="Turno" />
                            <?php for($i = 0; $i < count($turnos); $i++){
                                echo '<option value='.$turnos[$i]['CODIGO'].'>'.$turnos[$i]['NOMBRE'].'</option>';
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


    <div id="delSede" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Borrar sede</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Está seguro de borrar la sede</p>
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action" data-dismiss="modal"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

