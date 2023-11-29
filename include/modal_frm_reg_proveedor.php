<button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevo</button>

<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title h4" id="myLargeModalLabel">REGISTRAR NUEVO PROVEEDOR</h5>
               <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">

           <form action="operaciones/registrar_proveedo.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">RUC:</label>
                                    <input type="number" name="ruc"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">RAZON SOCIAL:</label>
                                    <input type="text" name="razon_social"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">EMAIL:</label>
                                    <input type="email" name="email"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">TELEFONO:</label>
                                    <input type="number" name="telefono"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">DIRECCION:</label>
                                    <input type="text" name="direccion"class="form-control col-lg-7 col-md-10 col-sm-12" required>
                                </div>
                            
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">METODO DE PAGO:</label>
                                    <input type="text" name="metodo_pago"class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                </div>
                            
                        
                                <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-dark">GUARDAR</button>
                                    
                                </div>
                            </form>


           </div>
         </div>
    </div>
</div>