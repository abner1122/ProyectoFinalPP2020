$(document).ready(function() {
var user_id, opcion,op_prod;
opcion = 4;

tablaProductos = $('#tablaProductos').DataTable({  
    "ajax":{            
        "url": "bd/crud_productos.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "id_producto"},
        {"data": "producto"},
        {"data": "presentacion"},
        {"data": "unidad"},
        {"data": "moneda"},
        {"data": "precio_compra"},
        {"data": "precio_venta"},
        {"data": "stock"},
        {"data": "estado"},
        {"data": "fecha_vencimiento"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
    ]
});


var fila; //captura la fila, para editar o eliminar
//submit para el Alta y Actualización
$('#formProductos').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    
    producto = $.trim($('#producto').val()); 
    presentacion = $.trim($('#presentacion').val());
    unidad = $.trim($('#unidad').val());    
    moneda = $.trim($('#moneda').val());    
    precio_compra = $.trim($('#precio_compra').val());    
    precio_venta = $.trim($('#precio_venta').val());    
    stock = $.trim($('#stock').val());    
    estado = $.trim($('#estado').val());    
    fecha_vencimiento = $.trim($('#fecha_vencimiento').val());    
        $.ajax({
          url: "bd/crud_productos.php",
          type: "POST",
          datatype:"json",    
          data:  {id_producto:id_producto, producto:producto, presentacion:presentacion, unidad:unidad, moneda:moneda, precio_compra:precio_compra, precio_venta:precio_venta, stock:stock, estado:estado, fecha_vencimiento:fecha_vencimiento, opcion: opcion},    
          success: function(data) {
            tablaProductos.ajax.reload(null, false);
           }
        });			        
    $('#modalCRUD').modal('hide');											     			
});
        
 

//para limpiar los campos antes de dar de Alta un producto
$("#btnNuevo").click(function(){
    opcion = 1; //alta           
    user_id=null;
    $("#formProductos").trigger("reset");
    $(".modal-header").css( "background-color", "#835BFD");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Agregar nuevo producto");
    $('#modalCRUD').modal('show');	    
});

//Editar        
$(document).on("click", ".btnEditar", function(){		        
    opcion = 2;//editar
    fila = $(this).closest("tr");	

    id_producto = parseInt(fila.find('td:eq(0)').text()); //capturo el id
    producto = fila.find('td:eq(1)').text();
    presentacion = fila.find('td:eq(2)').text();
    unidad = fila.find('td:eq(3)').text();
    moneda = fila.find('td:eq(4)').text();
    precio_compra = fila.find('td:eq(5)').text();
    precio_venta = fila.find('td:eq(6)').text();
    stock = fila.find('td:eq(7)').text();
    estado = fila.find('td:eq(8)').text();
    fecha_vencimiento = fila.find('td:eq(9)').text();

    $("#producto").val(producto);
    $("#presentacion").val(presentacion);
    $("#unidad").val(unidad);
    $("#moneda").val(moneda);
    $("#precio_compra").val(precio_compra);
    $("#precio_venta").val(precio_venta);
    $("#stock").val(stock);
    $("#estado").val(estado);
    $("#fecha_vencimiento").val(fecha_vencimiento);

    $(".modal-header").css("background-color", "#ACBD02");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Producto");		
    $('#modalCRUD').modal('show');		   
});

//Borrar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    id_producto = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
    opcion = 3; //eliminar        
    var respuesta = confirm("¿Está seguro de borrar el registro "+id_producto+"?");                
    if (respuesta) {            
        $.ajax({
          url: "bd/crud_productos.php",
          type: "POST",
          datatype:"json",    
          data:  {opcion:opcion, id_producto:id_producto},    
          success: function() {
              tablaProductos.row(fila.parents('tr')).remove().draw();                  
           }
        });	
    }
 });
     
});    