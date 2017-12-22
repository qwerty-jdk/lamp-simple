<div class="container">
    <!--<?php print_r($data['personas']); ?>-->
    <div class="dashhead">
        <div class="dashhead-titles">
            <h6 class="dashhead-subtitle">Dashboards</h6>
            <h2 class="dashhead-title">Personas</h2>
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
                <input type="text" class="form-control input-block" placeholder="Buscar persona">
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
                <th>RUT</th>
                <th>Primer Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Sede</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td><input type="checkbox" class="select-row"></td>
                <td><a href="#">19332274-3</a></td>
                <td>Diego</td>
                <td>Collao</td>
                <td>Albornoz</td>
                <td>Antofagasta</td>
            </tr>


            <tr>
                <td><input type="checkbox" class="select-row"></td>
                <td><a href="#">20124122-3</a></td>
                <td>Kevin</td>
                <td>Lopez</td>
                <td>Segura</td>
                <td>Mejillones</td>
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
                    <h4 class="modal-title" id="myModalLabel">Agregar persona</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body  modal-body-scroller">
                    <form action="index.php?controller=Persona&action=save" method="post">
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" class="form-control" name="rut" id="rut" placeholder="123456789-K" />
                        </div>
                        <div class="form-group">
                            <label for="primer_nombre">Primer Nombre</label>
                            <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Jorge" />
                        </div>
                        <div class="form-group">
                            <label for="segundo_nombre">Segundo Nombre</label>
                            <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="Andrés" />
                        </div>
                        <div class="form-group">
                            <label for="primer_apellido">Primer Apellido</label>
                            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Campos" />
                        </div>
                        <div class="form-group">
                            <label for="segundo_apellido">Segundo Apellido</label>
                            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="Silva" />
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-legend col-sm-2">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="sexo" value="m" checked>
                                            Másculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="sexo" value="f">
                                            Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" />
                        </div>
                        <div class="form-group">
                            <label for="sede">Sede</label>
                            <select class="form-control" name="sede" id="sede" placeholder="Sede" />
                            <?php for($i = 0; $i < count($sedes); $i++){
                                echo '<option value='.$sedes[$i]['CODIGO'].'>'.$sedes[$i]['NOMBRE'].'</option>';
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
                    <h4 class="modal-title" id="myModalLabel">Editar persona</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body  modal-body-scroller">
                    <form action="index.php?controller=Persona&action=save" method="post">
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" class="form-control" name="rut" id="rut" placeholder="123456789-K" />
                        </div>
                        <div class="form-group">
                            <label for="primer_nombre">Primer Nombre</label>
                            <input type="text" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Jorge" />
                        </div>
                        <div class="form-group">
                            <label for="segundo_nombre">Segundo Nombre</label>
                            <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre" placeholder="Andrés" />
                        </div>
                        <div class="form-group">
                            <label for="primer_apellido">Primer Apellido</label>
                            <input type="text" class="form-control" name="primer_apellido" id="primer_apellido" placeholder="Campos" />
                        </div>
                        <div class="form-group">
                            <label for="segundo_apellido">Segundo Apellido</label>
                            <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido" placeholder="Silva" />
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-legend col-sm-2">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="sexo" value="m" checked>
                                            Másculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="sexo" value="f">
                                            Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" />
                        </div>
                        <div class="form-group">
                            <label for="sede">Sede</label>
                            <select class="form-control" name="sede" id="sede" placeholder="Sede" />
                            <?php for($i = 0; $i < count($sedes); $i++){
                                echo '<option value='.$sedes[$i]['CODIGO'].'>'.$sedes[$i]['NOMBRE'].'</option>';
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
                    <h4 class="modal-title">Borrar persona</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Está seguro de borrar a la persona</p>
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action" data-dismiss="modal"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

