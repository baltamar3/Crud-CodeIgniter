$( document ).ready(function() {

  

    $('#table_peliculas').DataTable( {
        ajax: "http://localhost:82/cine/index.php/peliculas/cargar_datos_peliculas",
        columns: [
            { data: 'nombre' },
            { data: 'descripcion' },
            { data: 'director' },
            { data: 'genero' },
            
        ],

        dom: 'Bfrtip',
		"buttons": [{
			// genera boton para exportar Excel
			extend: 'excelHtml5',
			text: '<i class="fa fa-file-excel-o"></i>',
			titleAttr: 'Excel',
			className: 'btn btn-success',
		},
		{
			// genera boton para exportar csv
			extend: 'csvHtml5',
			text: '<i class="fa fa-file-text-o"></i>',
			titleAttr: 'CSV',
			className: 'btn btn-warning',
		},
		{
			// genera boton para exportar pdf
			extend: 'pdfHtml5',
			text: '<i class="fa fa-file-pdf-o"></i>',
			titleAttr: 'PDF',
			className: 'btn btn-danger',
		}
		]
    } );

    $("#btn_guardar_peli").click(function() {
        swal("Pelicula regustrada exitosamente!", "", "success");
      });
});


