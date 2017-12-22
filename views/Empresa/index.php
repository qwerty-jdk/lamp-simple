<div class="container">
    <!--<?php print_r($data['empresas']); ?>-->
        <div class="dashhead">
            <div class="dashhead-titles">
                <h6 class="dashhead-subtitle">Dashboards</h6>
                <h2 class="dashhead-title">Empresas</h2>
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
                    <input type="text" class="form-control input-block" placeholder="Buscar empresa">
                    <span class="icon icon-magnifying-glass"></span>
                </div>
            </div>
            <div class="flextable-item">
                <div class="btn-group">
                    <a class="nav-link" href="#addCompany" data-toggle="modal">
                    <button type="button" class="btn btn-outline-primary">
                        <span class="icon icon-add-to-list"></span>
                    </button>
                    </a>
                    <a class="nav-link" href="#editCompany" data-toggle="modal">
                        <button type="button" class="btn btn-outline-primary">
                            <span class="icon icon-pencil"></span>
                        </button>
                    </a>
                    <a class="nav-link" href="#delCompany" data-toggle="modal">
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
                    <th>Nombre</th>
                    <th>Razón social</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><input type="checkbox" class="select-row"></td>
                    <td><a href="#">76583417-K</a></td>
                    <td>Undisclosure</td>
                    <td>UNDISCLOSURE DIEGO COLLAO EIRL</td>
                </tr>
                <tr>
                    <td><input type="checkbox" class="select-row"></td>
                    <td><a href="#">81675600-6</a></td>
                    <td>Hites</td>
                    <td>EMPRESAS HITES S.A.</td>
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

    <div id="addCompany" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Agregar empresa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?controller=Empresa&action=save" method="post">
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" class="form-control" name="rut" id="rut" placeholder="123456789-K" />
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de fantasia" />
                        </div>
                        <div class="form-group">
                            <label for="razon_social">Razón social</label>
                            <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón social" />
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

    <div id="editCompany" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Editar empresa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="index.php?controller=Empresa&action=save" method="post">
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" class="form-control" name="rut" id="rut" placeholder="123456789-K" />
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de fantasia" />
                        </div>
                        <div class="form-group">
                            <label for="razon_social">Razón social</label>
                            <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón social" />
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

    <div id="delCompany" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Borrar empresa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Está seguro de borrar la empresa</p>
                </div>
                <div class="modal-actions">
                    <button type="submit" class="btn-link modal-action" data-dismiss="modal"><strong>Continuar</strong></button>
                    <button type="button" class="btn-link modal-action" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

