<class="wrapper wrapper-content animated fadeInRight">
<div class="row">
	<div class="col-lg-10">
            <div class="ibox float-e-margins">
						<div class="ibox-title text-center">
                            <h5>Registrar equipo con php</h5>
      
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                               
								<div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Nombre" class="form-control"></div>
								</div>
								<div class="form-group"><label class="col-sm-2 control-label">Modelo</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Modelo" class="form-control"></div>
								</div>
								<div class="form-group"><label class="col-sm-2 control-label">Marca</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Marca" class="form-control"></div>
								</div>
								<div class="form-group"><label class="col-sm-2 control-label" >Categoria</label>
                                    <div class="col-sm-10">
									<select class="form-control" name="CategoriaEquipo">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
										<option>XDXD</option>
                                    </select>
									</div>
								</div>
                               <div class="form-group"><label class="col-sm-2 control-label" >Subcategoria</label>
                                    <div class="col-sm-10">
									<select class="form-control" name="SubcategoriaEquipo">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>
									</div>
								</div>
                                <div class="form-group"><label class="col-sm-2 control-label">Serializado</label>
								 <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="checkbox" value=""> <i></i></label></div>
                                     </div>
								</div>
								<div class="form-group"><label class="col-sm-2 control-label">Número de serie</label>
                                    <div class="col-sm-10"><input type="text" placeholder="Número de serie" class="form-control"></div>
								</div>
								
                                <div class="form-group"><label class="col-sm-2 control-label">Foto</label>
                                  <div class="col-sm-10">
                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                          <div>
                                              <span class="btn btn-default btn-file"><span class="fileinput-new">Seleccionar imagen</span><span class="fileinput-exists">Cambiar</span><input type="file" name="imgUpl" id="imguplo"></span>
                                              <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Eliminar</a>
                                          </div>
                                      </div>
								  </div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label">Descripcion</label>
									<div class="col-sm-10"><textarea class="form-control" rows="4" id='areaDescripcion' placeholder='Descripcion'></textarea></div>
								</div>
                               
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancelar</button>
                                        <button class="btn btn-primary" type="submit" id="showtoast">Registrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
              </div>
    </div>
</div>
</div>

<link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">


<!-- Jasny -->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
