

<!DOCTYPE html>
<html lang="esp">

<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 20px;
    }

    html,
    body {
        height: 100%;
    }

    header {
        display: flex;
        flex-direction: row;
        background-color: #333;
        height: 100px;
        color: white;
    }

    #titulo {
        margin: auto;
        font-size: 40px;
        font-family: "Verdana", serif;
        ;
    }

    footer {
        font-family: "Verdana", serif;
        position: fixed;
        width: 100%;
        height: 100px;
        background-color: #333;
        text-align: center;
        margin: 0;
        color: white;
    }

    h2 {
        font-size: 25px;
    }

    #botones {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
    }

    #cuerpo {
        overflow-y: auto;
    }

    .table-body-container {
        height: 650px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .container {
        height: 400px;
    }



thead th, tbody td {
    border: 1px solid #ddd; /* Añadir borde a las celdas */
    padding: 8px; /* Espaciado interno en las celdas */
    text-align: center; /* Alineación de texto */
}

thead th {
    width:14%;/* Ejemplo para 6 columnas, ajusta según tu necesidad */
    cursor: pointer;

}

tbody td {
    width: 14%; /* Igual que en el thead */
}


    table {
        width: 100%;
        border-collapse: collapse;
    }


    #colorfiltro{
        width: 90%;
        padding: 5px;
        display: block;

    }

    /* Estilo para los inputs en la tabla */
    input {
        width: 90%;
        padding: 5px;
        /* Espaciado interno */
        border: 1px solid #ccc;
        /* Borde para el input */
        border-radius: 4px;
        box-sizing: border-box;
        margin: 5px auto;
        /* Centra y agrega margen vertical */
        display: block;
        /* Permite centrado con auto */
    }

    .button {
        cursor: pointer;
        background-color: rgb(115, 193, 219);
        text-align: center;
        width: 100%;
        margin: 5px;
    }


    button:hover {
        background-color: #2D5772;
        color: white;
    }

    #entr {
        margin-top: 30px;
        width: 20%;
        height: 25%;

    }

    .custom-td {
        text-align: center;
        vertical-align: middle;
    }

    .button1 {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
        width: 100%;
    }

    .button1:hover {
        background-color: #45a049;
    }

    /* div modal grande */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        right: 20%;
        top: 10%;
        width: 70%;
        height: 500px;
        background-color: #cbe1d5;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    /* modal */
    .modal-content {
        display: flex;
        height: 400px;
        width: 60%;
        flex-direction: column;
        flex-wrap: wrap;

    }

    .botonenviar {
        margin: auto;

    }

    .titulomodal {
        background-color: #9eecf9;
        width: 100%;
        padding: 5px;
        height: 40px;
        text-align: center;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: center;
    }

    .entradaform {
        margin: 5px;
        height: 30px;
    }

    form {
        display: flex;
        height: 300px;
        width: 90%;
        flex-direction: column;
        margin: 10px;
    }

    label {
        margin-left: 10px;
    }



    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    .close {
        font-size: 50px;
        color: #ff0000;
        cursor: pointer;
        margin-right: 20px;
        transition: transform 0.3s;
    }

    .close:hover {
        transform: scale(1.2);
    }

    #encmodal {
        display: flex;
        height: 50px;
        justify-content: space-evenly;
        align-items: baseline;
        background-color: grey;
        flex-direction: row;
    }

    #inputflor {
        padding: 5px;
        cursor: pointer;
        width: 100%;
        height: 25px;
        border: 1px solid white;
        border-radius: 4px;
        background-color: white;
    }

    .listaOpciones {
        border: 1px solid #ccc;
        background-color: #fff;
        position: absolute;
        z-index: 1000;
    }

    .custom-file-upload {
        display: block;
        cursor: pointer;
        color: white;
        border-radius: 4px;
    }

    #contenidoModalRespuesta {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        width: 80%;
        position: relative;
        /* Para el posicionamiento del botón de cierre */

    }

    #ventanaModalRespuesta {
        display: none;
        position: fixed;
        width: 100%;
        top: 0;
        left: 10%;
        align-items: center;
    }
</style>

<body>
    <header>
        <h2 id="titulo">ABM Celulares</h2>
        <input id="entr">
        <div id="botones">
            <button id="cargardatos" class="button">Cargar datos</button>
            <button id="borrar" class="button">Borrar datos</button>
            <button id="limpiar" class="button">Limpiar filtros</button>
            <button id="alta" class="button">Alta registros</button>
            <button id="cerrar" class="button">Cerrar Sesión</button>

        </div>
    </header>


    <div id="ventanaModalRespuesta">

        <div id="contenidoModalRespuesta">
            <!-- El iframe -->
        </div>
    </div>

    <div id="pdfContainer"></div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th id="orden">
                        <h2>Código</h2>
                    </th>
                    <th id="nombre">
                        <h2>Nombre</h2>
                    </th>
                    <th id="tipo">
                        <h2>Marca</h2>
                    </th>
                    <th id="color">
                        <h2>Color</h2>
                    </th>
                    <th id="precio">
                        <h2>Precio</h2>
                    </th>
                    <th id="fecha">
                        <h2>Fecha de compra</h2>
                    </th>
                    <th>
                        <h2>Archivos</h2>
                    </th>
                    <th>
                        <h2>Modificar</h2>
                    </th>
                    <th id="fecha">
                        <h2>Eliminar</h2>
                    </th>
                </tr>
                <tr>
                    <th><input type="int" id="codigofiltro" placeholder="Código"></th>
                    <th><input type="text" id="nombrefiltro" placeholder="Nombre"></th>
                    <th><input type="text" id="tipofiltro" placeholder="Tipo"></th>
                    <th>
                        <select id="colorfiltro">
                            <option value="">Selecciona un color</option>
                        </select>
                    </th>
                    <th><input type="text" id="preciofiltro" placeholder="Precio"></th>
                    <th><input type="date" id="fechafiltro" placeholder="Fecha"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
        </table>
        <div class="table-body-container">
            <table>
                <tbody id="cuerpo">
                    <!--  se rellenarán las filas dinámicamente -->
                </tbody>
            </table>
        </div>
        <footer>
            <h2>Pie de pagina</h2>
        </footer>
    </div>



    <div id="modalmodificar" class="modal" style="display: none;">
        <div class="titulomodal">
            <h2>Encabezado modal formulario modificación</h2>
            <span id="cerrarModal" class="close">&times;</span>
        </div>
        <form id="formulariomod" method="POST" enctype="multipart/form-data">
            <div class="modal-content">

                <label for="modcodigo">Código</label>
                <input type="text" id="modcodigo" class="entradaform" name="modcodigo">
                <label for="modnombre">Nombre</label>
                <input type="text" id="modnombre" class="entradaform" name="modnombre" required>
                <label for="modtipo">Tipo</label>
                <input type="text" id="modtipo" class="entradaform" name="modtipo" required>
                <label for="modcolor">Color</label>
                <input type="text" id="modcolor" class="entradaform" name="modcolor" required>
                <label for="modprecio">Precio</label>
                <input type="number" id="modprecio" class="entradaform" name="modprecio" required>
                <label for="modfecha">Fecha de Floración</label>
                <input type="date" id="modfecha" name="modfecha" class="entradaform" required>

                <label for="archivo">Archivo:</label>
                <input type="file" id="archivo" class="entradaform custom-file-upload" name="documentoPdf">

            </div>

            <button type="submit" class="botonenviar">Modificar</button>
        </form>
    </div>

    <div id="modalalta" class="modal" style="display: none;">
        <div class="titulomodal">
                <h2>Encabezado modal formulario alta </h2>
                <span id="cerraralta" class="close">&times;</span>
            </div>
            <form id="formalta" method="post" enctype="multipart/form-data">
            <div class="modal-content">
    
                <label for="altacodigo">Códigoo</label>
                <input type="text" id="modcodigo" class="entradaform" name="altacodigo" required>
    
                <label for="altanombre">Nombre</label>
                <input type="text" id="modnombre" class="entradaform" name="altanombre" required>
    
                <label for="altatipo">Tipo</label>
                <input type="text" id="modtipo" class="entradaform" name="altatipo" required>
    
                <label for="altacolor">Color</label>
                <input type="text" id="modcolor" class="entradaform" name="altacolor" required>
    
                <label for="altaprecio">Precio</label>
                <input type="number" id="modprecio" class="entradaform" name="altaprecio" required>
    
                <label for="altafecha">Fecha floración</label>
                <input type="date" id="modfecha" class="entradaform" name="altafecha" required>
    
                <label for="file">Selecciona un archivo:</label>
                <input type="file" id="file" class="entradaform" name="documentoPdf" required>
        </div>
                <button type="submit" class="botonenviar">Dar de alta</button>
            </form>
        </div>
    
    





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //llamada funciones
        $(document).ready(function () {
            $("#cargardatos").click(cargartabla)
        });
        $(document).ready(function () {
            $("#borrar").click(vaciartabla)
        });

        $("#orden").click(function () {
            tablaord("ID")
        });
        $("#nombre").click(function () {
            tablaord("NombreFlor")
        });
        $("#tipo").click(function () {
            tablaord("Tipo")
        });
        $("#color").click(function () {
            tablaord("Color")
        });
        $("#precio").click(function () {
            tablaord("Precio")
        });
        $("#fecha").click(function () {
            tablaord("fecha_floracion")
        });

        $(document).ready(function () {
            $('#comprobar').click(verificarValores);
        });

        $('#colorfiltro').on('click', function () {
            cargarOpciones();
        })

        //funcion para combrobar todo ok
        $(document).ready(function () {
            $.ajax({
                url: "salida.php",
                type: 'GET',
                dataType: "json",
                success: function (floresData) {
                    // Muestra todo el JSON en un alert
                    alert(JSON.stringify(floresData, null, 2)); // El segundo parámetro 'null' y el tercero '2' es para formatear el JSON
                }
            });
        });

        let opcionesCargadas = false;

        function cargarOpciones() {
            if (opcionesCargadas) return; // No cargar nuevamente si ya se cargaron

            $.ajax({
                url: 'desplegable.php',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data); // Verifica el contenido de data
                    const selector = document.getElementById("colorfiltro");
                    selector.innerHTML = ''; // Limpia las opciones existentes
                    selector.appendChild(new Option('-- Selecciona un color --', '')); // Opción predeterminada

                    // Agrega las nuevas opciones al select
                    data.forEach(item => {
                        const option = new Option(item.color, item.color); // Establece el texto y el valor del option
                        selector.appendChild(option);
                    });

                    // Establecer que las opciones han sido cargadas
                    opcionesCargadas = true;
                },
                error: function (xhr, status, error) {
                    console.error('Error al cargar las opciones:', error);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', cargarOpciones);


        var modalmod = document.getElementById("modalmodificar");
        var modalalta = document.getElementById("modalalta");
        var span = document.getElementById("cerrarModal");
        var spanAlta = document.getElementById("cerraralta");
        var contenidoModalRespuesta = document.getElementById("contenidoModalRespuesta");
        spanAlta.onclick = function () {
            modalalta.style.display = "none";
        };

        span.onclick = function () {
            modalmod.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modalalta) {
                modalalta.style.display = "none";
            }
        };
        $(document).ready(function() {
        $('#cerrar').click(function() {
            location.href = "logout.php";
        });
    });
        // Cerrar el modal al hacer clic en el botón de cierre
        $(document).on('click', '#cerraralta', function () {
            $("#ventanaModalRespuesta").css("display", "none");
            $("#contenidoModalRespuesta").empty(); // Limpiar el contenido
        });

        // Cerrar el modal al hacer clic fuera del contenido
        $(window).on('click', function (event) {
            if ($(event.target).is('#ventanaModalRespuesta')) {
                $("#ventanaModalRespuesta").css("display", "none");
                $("#contenidoModalRespuesta").empty(); // Limpiar el contenido
            }
        });
        
        
        function limpiarFiltros() {
            // Limpiar inputs de texto y número
            document.getElementById('codigofiltro').value = '';
            document.getElementById('nombrefiltro').value = '';
            document.getElementById('tipofiltro').value = '';
            document.getElementById('preciofiltro').value = '';
            document.getElementById('fechafiltro').value = '';
        }
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('limpiar').addEventListener('click', limpiarFiltros);
        });

        
        
        
        
        
        
        
        
        
        
        
        

        // funciones    
        function fillFormWithData(data) {
            $('#modcodigo').val(data.ID);
            $('#modnombre').val(data.NombreFlor);
            $('#modtipo').val(data.Tipo);
            $('#modcolor').val(data.Color);
            $('#modprecio').val(data.Precio);
            $('#modfecha').val(data.fecha_floracion);
        }

        $(window).on('click', function (event) {
            // Verifica si el clic fue en el fondo del modal (fuera del contenido)
            if ($(event.target).is('#modalmodificar')) {
                $("#modalmodificar").css("display", "none");
            }
        });
        // Enviar formulario de modificar
        $('#formulariomod').on('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(this);
            $.ajax({
                url: 'modificar.php',
                method: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    alert('Flor actualizada exitosamente');
                    $('#modalmodificar').hide();
                },
                error: function () {
                    alert('Error al modificar el partido.');
                }
            });
        });


        function verPdf(codigo) {
            $.ajax({
                method: 'GET',
                url: "traeDoc.php",
                data: {
                    codigo: codigo,
                },
                success: function (respuestaDelServer) {
                    var objJson = JSON.parse(respuestaDelServer);
                    $("#ventanaModalRespuesta").css("display", "flex");
                    $("#contenidoModalRespuesta").empty();
                    $("#contenidoModalRespuesta").html("<iframe width='100%' height='500px' src='data:application/pdf;base64," + objJson.file + "'></iframe>");
                },
                error: function (xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", error);
                }
            });
        }




        var botonalta = document.getElementById('alta');
        botonalta.onclick = function () {
            modalalta.style.display = "block";
        };


        const formalta = document.getElementById('formalta');

        formalta.addEventListener('submit', (event) => {
            event.preventDefault();

            const formData = new FormData(formalta);
            $.ajax({
                type: 'POST',
                url: 'alta.php',
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    console.log("Respuesta del servidor:", response);
                    //alert("Operación exitosa: " + response);
                    console.error("q onda");
                    $('#modalalta').hide();

                },
                error: () => {
                    //alert("Error en la operación");
                    console.log("salio mal");
                    $('#modalalta').hide();


                }
            });
        });

        function verificarValores() {
        

            const valores = {
                codigo: $('#codigofiltro').val(),
                nombre: $('#nombrefiltro').val(),
                tipo: $('#tipofiltro').val(),
                color: $('#colorfiltro').val(),
                precio: $('#preciofiltro').val(),
                fecha: $('#fechafiltro').val(),
            };
            // Mostrar los valores
            let tieneValor = false; // Variable para verificar si hay al menos un valor
            for (const key in valores) {
                if (valores[key] !== '') {
                    tieneValor = true; // Cambia a true si al menos uno tiene valor
                }
            }

            return tieneValor; // Retorna true si hay al menos un valor
        }


        function eliminar(id) {
            if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
                fetch('baja.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded' // Cambiar a este tipo
                    },
                    body: 'ID=' + encodeURIComponent(id) // Enviar ID como un parámetro
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === "success") {
                            alert("Registro eliminado exitosamente.");
                            cargartabla(); // Recargar la tabla para reflejar la eliminación
                        } else {
                            alert("Error: " + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error al eliminar el registro.');
                    });
            }
        };


        function cargartabla() {
            var body = document.getElementById("cuerpo");
            body.innerHTML = ''; // Reinicia el contenido del cuerpo
            $("#cuerpo").html("<p id='mensaje'>Esperando respuesta ..</p>");

            if (verificarValores()) {

                $.ajax({
                    method: 'GET',
                    url: "filtrogeneral.php",
                    data: {
                        codigofiltro: $('#codigofiltro').val(),
                        nombrefiltro: $('#nombrefiltro').val(),
                        tipofiltro: $('#tipofiltro').val(),
                        colorfiltro: $('#colorfiltro').val(), // Este valor se envía
                        preciofiltro: $('#preciofiltro').val(),
                        fechafiltro: $('#fechafiltro').val()
                    },
                    success: function (respuestaDelServer) {
                        var objJson = JSON.parse(respuestaDelServer);
                        $("#mensaje").remove();
                        console.log("Datos enviados al servidor:", {
                            colorfiltro: $('#colorfiltro').val()
                        });

                        if (objJson && objJson.length > 0) {
                            objJson.forEach(function (argValor) {
                                var objTr = document.createElement("tr");

                                // Crear las celdas con los datos
                                for (var key in argValor) {
                                    var objTd = document.createElement("td");
                                    objTd.innerHTML = argValor[key];
                                    objTr.appendChild(objTd);
                                }

                                // Crear el botón "Ver PDF"
                                var tdFile = document.createElement("td");
                                var botonVerPDF = document.createElement("button");
                                botonVerPDF.textContent = "Ver PDF"; // Texto del botón
                                botonVerPDF.classList.add("button1");
                                tdFile.appendChild(botonVerPDF); // Agrega el botón a la celda
                                objTr.appendChild(tdFile); // Añadir la celda del botón "Ver PDF" a la fila

                                // Define el evento para el botón "Ver PDF"
                                botonVerPDF.onclick = function () {
                                    var fila = this.closest("tr"); // Encuentra la fila del botón clickeado
                                    if (fila) {
                                        var codigo = fila.cells[0].innerText; // Obtén el valor de la primera celda
                                        console.log("Código obtenido:", codigo); // Para verificar el ID que se pasa
                                        verPdf(codigo);
                                    }
                                };

                                // Crear el botón "Modificar"
                                var tdModificar = document.createElement("td");
                                var botonmod = document.createElement("button");
                                botonmod.id = "botonmodificar";
                                botonmod.textContent = "Modificar";
                                botonmod.classList.add("button1");

                                botonmod.onclick = function () {
                                    var data = {
                                        ID: objTr.cells[0].innerText,
                                        NombreFlor: objTr.cells[1].innerText,
                                        Tipo: objTr.cells[2].innerText,
                                        Color: objTr.cells[3].innerText,
                                        Precio: objTr.cells[4].innerText,
                                        fecha_floracion: objTr.cells[5].innerText
                                    };
                                    modalmod.style.display = "block";
                                    fillFormWithData(data);
                                };

                                tdModificar.appendChild(botonmod);
                                objTr.appendChild(tdModificar);

                                // Crear el botón "Eliminar"
                                var tdEliminar = document.createElement("td");
                                var botonbaja = document.createElement("button");
                                botonbaja.id = "botoneliminar";
                                botonbaja.textContent = "Eliminar";
                                botonbaja.classList.add("button1");

                                botonbaja.onclick = function () {
                                    eliminar(argValor.ID); // Suponiendo que 'ID' está presente en argValor
                                };

                                tdEliminar.appendChild(botonbaja);
                                objTr.appendChild(tdEliminar); // Añadir la celda del botón Eliminar a la fila

                                $("#cuerpo").append(objTr); // Finalmente añadir la fila completa a la tabla
                            });
                        } else {
                            $("#cuerpo").html("<p>No se encontraron resultados.</p>");
                        }
                    }
                });
            }
            else {
                $.ajax({
                    type: 'GET',
                    url: "salida.php",
                    dataType: "json",
                    success: function (respuestaDelServer) {
                        alert("Cargando información");
                        var objJson = respuestaDelServer;
                        $("#mensaje").remove();

                        if (objJson && objJson.length > 0) {

                            objJson.forEach(function (argValor) {
                                var objTr = document.createElement("tr");

                                // Crear las celdas con los datos
                                for (var key in argValor) {
                                    var objTd = document.createElement("td");
                                    objTd.classList.add("custom-td");

                                    if (key === 'file') {
                                        var botonVerPDF = document.createElement("button");
                                        botonVerPDF.textContent = "Ver PDF"; // Texto del botón
                                        botonVerPDF.classList.add("button1");
                                        objTd.appendChild(botonVerPDF); // Agrega el botón a la celda
                                    } else {
                                        objTd.innerHTML = argValor[key]; // Asignar el valor del atributo para otras columnas
                                    }

                                    objTr.appendChild(objTd); // Añadir la celda a la fila
                                }
                                // Define el evento para el botón aquí
                                botonVerPDF.onclick = function () {
                                    var fila = this.closest("tr"); // Encuentra la fila del botón clickeado
                                    if (fila) {
                                        var codigo = fila.cells[0].innerText; // Obtén el valor de la primera celda
                                        console.log("Código obtenido:", codigo); // Para verificar el ID que se pasa
                                        verPdf(codigo);

                                    }
                                };
                                var id = objTr.cells[0].innerText;


                                var tdModificar = document.createElement("td");
                                var botonmod = document.createElement("button");
                                botonmod.id = "botonmodificar";
                                botonmod.textContent = "Modificar";
                                botonmod.classList.add("button1");

                                botonmod.onclick = function () {
                                    var data = {
                                        ID: objTr.cells[0].innerText,
                                        NombreFlor: objTr.cells[1].innerText,
                                        Tipo: objTr.cells[2].innerText,
                                        Color: objTr.cells[3].innerText,
                                        Precio: objTr.cells[4].innerText,
                                        fecha_floracion: objTr.cells[5].innerText
                                    };
                                    modalmod.style.display = "block";
                                    fillFormWithData(data);
                                };

                                tdModificar.appendChild(botonmod);
                                objTr.appendChild(tdModificar);

                                var tdEliminar = document.createElement("td");
                                var botonbaja = document.createElement("button");
                                botonbaja.id = "botoneliminar";
                                botonbaja.textContent = "Eliminar";
                                botonbaja.classList.add("button1");

                                botonbaja.onclick = function () {
                                    eliminar(id);
                                };

                                tdEliminar.appendChild(botonbaja);
                                objTr.appendChild(tdEliminar); // Añadir la celda del botón Eliminar a la fila

                                $("#cuerpo").append(objTr); // Finalmente añadir la fila completa a la tabla
                            });
                        }
                    }
                });
            }
        }






        function vaciartabla() {
            $("#cuerpo").empty();
        }

        function tablaord(campoOrden) {
            document.getElementById("entr").value = campoOrden;

            var body = document.getElementById("cuerpo");
            body.innerHTML = ''; /*reinicia */
            $("#cuerpo").html("<p id='mensaje'>Esperando respuesta ..</p>");

            $.ajax({
                type: 'GET',
                url: "ordenar.php",
                dataType: "json",
                data: {
                    orden: campoOrden
                },
                success: function (respuestaDelServer) {
                    console.log("Información recibida"); // Para depurar

                    alert("cargando informacion")
                    $("#mensaje").remove();

                    var objJson = respuestaDelServer;


                    if (objJson && objJson.length > 0) {
                        $("#cuerpo").empty(); // Limpia el cuerpo antes de agregar nuevos datos

                        objJson.forEach(function (argValor) {
                            var objTr = document.createElement("tr");

                            // Crear las celdas con los datos
                            for (var key in argValor) {
                                var objTd = document.createElement("td");
                                objTd.innerHTML = argValor[key]; // Asignar el valor del atributo para otras columnas
                                objTr.appendChild(objTd); // Añadir la celda a la fila
                            }
                            var tdFile = document.createElement("td");
                                var botonVerPDF = document.createElement("button");
                                botonVerPDF.textContent = "Ver PDF"; // Texto del botón
                                botonVerPDF.classList.add("button1");
                                tdFile.appendChild(botonVerPDF); // Agrega el botón a la celda
                                objTr.appendChild(tdFile); // Añadir la celda del botón "Ver PDF" a la fila

                                // Define el evento para el botón "Ver PDF"
                                botonVerPDF.onclick = function () {
                                    var fila = this.closest("tr"); // Encuentra la fila del botón clickeado
                                    if (fila) {
                                        var codigo = fila.cells[0].innerText; // Obtén el valor de la primera celda
                                        console.log("Código obtenido:", codigo); // Para verificar el ID que se pasa
                                        verPdf(codigo);
                                    }
                                };

                            // Crear el botón "Modificar"
                            var tdModificar = document.createElement("td");
                            var botonmod = document.createElement("button");
                            botonmod.id = "botonmodificar";
                            botonmod.textContent = "Modificar";
                            botonmod.classList.add("button1");

                            botonmod.onclick = function () {
                                var data = {
                                    ID: objTr.cells[0].innerText,
                                    NombreFlor: objTr.cells[1].innerText,
                                    Tipo: objTr.cells[2].innerText,
                                    Color: objTr.cells[3].innerText,
                                    Precio: objTr.cells[4].innerText,
                                    fecha_floracion: objTr.cells[5].innerText
                                };
                                modalmod.style.display = "block";
                                fillFormWithData(data);
                            };

                            tdModificar.appendChild(botonmod);
                            objTr.appendChild(tdModificar);

                            // Crear el botón "Eliminar"
                            var tdEliminar = document.createElement("td");
                            var botonbaja = document.createElement("button");
                            botonbaja.id = "botoneliminar";
                            botonbaja.textContent = "Eliminar";
                            botonbaja.classList.add("button1");

                            botonbaja.onclick = function () {
                                eliminar(argValor.ID); // Suponiendo que 'ID' está presente en argValor
                            };

                            tdEliminar.appendChild(botonbaja);
                            objTr.appendChild(tdEliminar); // Añadir la celda del botón Eliminar a la fila

                            $("#cuerpo").append(objTr); // Finalmente añadir la fila completa a la tabla
                        });
                    }
                }
            });
        }
    </script>

</body>

</html>