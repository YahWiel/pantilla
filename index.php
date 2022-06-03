<?php
require_once("./header.php");
require_once("./sidebar_nav.php");

?>


<body>
    <div class="content-wrapper " id="main">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mt-4"><i class="nav-icon fas fa-user-friends mr-3 purple"></i>TABLA DE <b class="purple">APODERADOS</b></h3>
                        <!-- Button trigger modal -->
                        <div class="float-right">
                            <button type="button" class="btn btn-success m-3" data-toggle="modal" data-target="#btnNuevaPersona">
                                <i class="fas fa-plus"></i> NUEVO
                            </button>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="tablapersona" class="table table-striped table-bordered table-condensed display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRES Y APELLIDOS</th>
                                    <th>DNI</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>FOTO</th>
                                    <th>ACCIONES</th>
                                    <th>FOTO</th>
                                    <th>ACCIONES</th>
                                    <th>FOTO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>ID</td>
                                    <td>NOMBRES Y APELLIDOS</td>
                                    <td>DNI</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>

                                </tr>
                                <tr>
                                <td>ID</td>
                                    <td>NOMBRES Y APELLIDOS</td>
                                    <td>DNI</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    
                                </tr>
                                <tr>
                                <td>ID</td>
                                    <td>NOMBRES Y APELLIDOS</td>
                                    <td>DNI1</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    
                                </tr>
                                <tr>
                                <td>ID</td>
                                    <td>NOMBRES Y APELLIDOS</td>
                                    <td>DNI2</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    <td>FOTO</td>
                                    <td>ACCIONES</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Modal INSERTAR-->
            <div class="modal fade" id="btnNuevaPersona" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="btnNuevaPersonaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="btnNuevaPersonaLabel">Registro de Datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="post" id="NuevoFrm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="nom">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apellido</label>
                                    <input type="text" class="form-control" name="ape">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">DNI</label>
                                    <input type="int" class="form-control" name="dni">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">IMAGEN</label>
                                    <input type="file" class="form-control" name="img">
                                </div>

                                <button type="submit" class="btn btn-primary" id="guardarnuevo">Guardar</button>
                                <!-- <input type="hidden" value="<?php echo $row["ID"] ?>" name="id"> -->
                                <input type="hidden" value="1" name="opcion">

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal EDITAR-->
            <div class="modal fade" id="modaleditar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modaleditarLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modaleditarLabel">Edición de Datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="post" id="frmeditar">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="nom" id="nomedit">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apellido</label>
                                    <input type="text" class="form-control" name="ape" id="apeedit">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">DNI</label>
                                    <input type="int" class="form-control" name="dni" id="dniedit">
                                </div>

                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <input type="hidden" name="id" id="idedit">
                                <input type="hidden" value="2" name="opcion">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



<?php
require_once("./footer.php");

?>