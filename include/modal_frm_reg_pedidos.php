<!-- Large modal -->
<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">REGISTRAR NUEVO USUARIO</h5>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="operaciones/registrar_pedidos.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">CLIENTE:</label>
                                    <select name="id_cliente" id="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                        <option value=""></option>
                                        <?php $b_cliente ="SELECT * FROM cliente";
                                        $r_b_cliente = mysqli_query($conexion, $b_cliente);
                                        while ($datos_cliente = mysqli_fetch_array($r_b_cliente)){?>
                                                <option value="<?php echo $datos_cliente['id']; ?>"><?php echo $datos_cliente['ruc_dni']; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA_HORA_PEDIDO: </label>
                                    <input type="date" name="fecha_hora_pedido" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">FECHA_ENTREGA: </label>
                                    <input type="date" name="fecha_entrega" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">METODO_PAGO: </label>
                                    <input type="text" name="metodo_pago" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">MONTO: </label>
                                    <input type="number" name="monto" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">COMPROBANTE: </label>
                                    <input type="text" name="comprobante" class="form-control col-lg-8 col-md-10 col-sm-12" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">ESTADO: </label>
                                    <input type="text" name="estado" class="form-control col-lg-8 col-md-10 col-sm-12" required>
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


                                    