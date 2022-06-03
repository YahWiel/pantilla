    <!-- AdminLTE App -->
    

    <script src="resources/dist/js/adminlte.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<!--
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->


<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

<!--LIBRERIAS PARA EXTRAER DATOS DE DATATABLE-->

   <!--  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script> -->

    <!-- FIN CONTENT-WRAPPER -->
    <script src="./prueba.js" type="module"></script>
    <script>
            //INSERTAR DATOS
            $("#NuevoFrm").submit(function(e) {
                   
                    e.preventDefault();
                    $.ajax({
                            url: './pruebaCrud.php',
                            type: 'POST',
                            data:  new FormData($(e.target)),
                            success: function(data) {
                                    console.log(data);
                                    if (data == 1) {
                                            Swal.fire(
                                                    'The Internet?',
                                                    "Se guardo con exito",
                                                    'question'
                                            )
                                            setTimeout(() => {
                                                    location.href = "http://localhost/proyectos2/NUEVO/index.php";
                                            }, 1000);
                                    } else {
                                            Swal.fire(
                                                    'The Internet?',
                                                    "Datos no guardados",
                                                    'question'
                                            )
                                    }
                            }
                    });
            });
            //FIN INSERTAR DATOS

            //MODIFICAR DATOS
            $("#frmeditar").submit(function(e) {
                    e.preventDefault();
                    $.ajax({
                            url: './pruebaCrud.php',
                            type: 'POST',
                            data: $("#frmeditar").serialize(),
                            success: function(data) {
                                    console.log(data);
                                    if (data == 1) {
                                            Swal.fire(
                                                    'The Internet?',
                                                    "Datos actualizados",
                                                    'question'
                                            )

                                            setTimeout(() => {
                                                    location.href = "http://localhost/proyectos2/NUEVO/index.php";
                                            }, 1000);
                                    } else {
                                            Swal.fire(
                                                    'The Internet?',
                                                    "Datos no actualizados",
                                                    'question'
                                            )
                                    }

                            }
                    });
            });


            $('#modaleditar').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    $('#nomedit').val(button.data('nombre'));
                    $('#apeedit').val(button.data('apellido'));
                    $('#dniedit').val(button.data('dni'));
                    
                    $('#idedit').val(button.data('id_registro'));
                    console.log("hola");
            });
            //FIN MODIFICAR DATOS

            //ELIMINAR DATOS



            function eliminardatos(id) {
                    Swal.fire({
                            title: 'Está seguro de eliminar?',
                            text: "No podrás revertir esto!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, borrar!'
                    }).then((result) => {

                            if (result.isConfirmed) {
                                    $.ajax({
                                            url: './pruebaCrud.php',
                                            type: 'POST',
                                            data: {
                                                    id: id,
                                                    opcion: "3"
                                            },
                                            success: function(data) {
                                                    console.log(data);
                                                    if (data == 1) {
                                                            Swal.fire(
                                                                    'Borrado con exito!',
                                                                    'Su dato ha sido eliminado.',
                                                                    'success'
                                                            )
                                                            setTimeout(() => {
                                                                    location.href = "http://localhost/proyectos2/NUEVO/index.php";
                                                            }, 1000);


                                                    } else {
                                                            Swal.fire(
                                                                    'The Internet?',
                                                                    "Datos no eliminados",
                                                                    'question'
                                                            )
                                                    }

                                            }
                                    });

                            }
                    })
            }

            //FIN ELIMINAR DATOS
    </script>
    </body>

    </html>