<!-- Large modal -->
<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">REGISTRAR NUEVO CLIENTE</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="operaciones/registrar_cliente.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12" >RUC_DNI: </label>
                                    <input type="number" name="ruc_dni" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12" >RAZON_SOCIAL: </label>
                                    <input type="text" name="razon_social" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">TELEFONO: </label>
                                    <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CORREO: </label>
                                    <input type="email" name="correo" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION: </label>
                                    <input type="text" name="direccion" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION_ENVIO: </label>
                                    <input type="text" name="direccion_envio" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-md-3 col-sm-12"> </label>
                                    <button type="submit" class="btn btn-info">Guardar</button>
                                </div>
                                </form>
            </div>
        </div>
    </div>
</div>


                                    