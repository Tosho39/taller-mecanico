    <button class="btn btn-primary" data-toggle="modal" data-target="#formModal"><i class='fa fa-plus'></i> Nuevo</button>

    <!-- Form Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- form  -->
            <form class="form-horizontal" role="form" method="post" id="new_register" name="new_register">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"> Nuevo Proveedor</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre: </label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="Nombre: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cuit" class="col-sm-2 control-label">RUC: </label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="cuit" name="cuit" placeholder="RUC: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="col-sm-2 control-label">Dirección: </label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="direccion" name="direccion" placeholder="Dirección: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="localidad" class="col-sm-2 control-label">Localidad: </label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="localidad" name="localidad" placeholder="Localidad: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-2 control-label">Telefono: </label>
                        <div class="col-sm-10">
                            <input type="text" required class="form-control" id="telefono" name="telefono" placeholder="Telefono: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="celular" class="col-sm-2 control-label">Celular: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular: ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="col-sm-2 control-label">Estado: </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="estado" id="estado">
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="guardar_datos" class="btn btn-primary">Agregar</button>
                </div>
            </form>
            <!-- /end form  -->
            </div>
        </div>
    </div>
    <!-- End Form Modal -->