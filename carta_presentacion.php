<?php
session_start();
if (empty($_SESSION['codigo_institucional'])) {
    echo '<script>
    alert("Para continuar debe iniciar sesión");
    window.location = "login.html"; 
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mesa de partes</title>
    <link rel="stylesheet" href="assets/css/mesadepartes.css" />
</head>

<body>
    <header>
        <?php include './includes/header.php'; ?>
    </header>
    <div class="container">
        <?php include './includes/sidebar.php'; ?>
        <main class="main-content">
            <!-- INICIA FORM DE REGISTRO-->
            <div class="profile-form" id="Next-step">
                <form action="#" method="POST">
                    <div class="profile-fields">
                        <div>
                            <label for="codigo">Código:</label>
                            <input type="text" id="codigo" name="codigo" value="" />
                            <div class="error-message" id="codigo-error"></div>
                        </div>
                        <div>
                            <label for="name">Apellidos y nombres:</label>
                            <input type="text" id="name" name="name" value="" />
                            <div class="error-message" id="name-error"></div>
                        </div>
                        <div>
                            <label for="distritos">Distrito:</label>
                            <select name="opciones" id="distritos">
                                <option value="ANCON" default>ANCON</option>
                                <option value="ATE">ATE</option>
                                <option value="BARRANCO">BARRANCO</option>
                                <option value="BREÑA">BREÑA</option>
                                <option value="CARABAYLLO">CARABAYLLO</option>
                                <option value="CHACLACAYO">CHACLACAYO</option>
                                <option value="CHORRILLOS">CHORRILLOS</option>
                                <option value="CIENEGUILLA">CIENEGUILLA</option>
                                <option value="COMAS">COMAS</option>
                                <option value="EL AGUSTINO">EL AGUSTINO</option>
                                <option value="INDEPENDENCIA">INDEPENDENCIA</option>
                                <option value="JESUS MARIA">JESUS MARIA</option>
                                <option value="LA MOLINA">LA MOLINA</option>
                                <option value="LA VICTORIA">LA VICTORIA</option>
                                <option value="LIMA">LIMA</option>
                                <option value="LINCE">LINCE</option>
                                <option value="LOS OLIVOS">LOS OLIVOS</option>
                                <option value="LURIGANCHO">LURIGANCHO</option>
                                <option value="LURIN">LURIN</option>
                                <option value="MAGDALENA DEL MAR">MAGDALENA DEL MAR</option>
                                <option value="MIRAFLORES">MIRAFLORES</option>
                                <option value="PACHACAMAC">PACHACAMAC</option>
                                <option value="PUCUSANA">PUCUSANA</option>
                                <option value="PUEBLO LIBRE">PUEBLO LIBRE</option>
                                <option value="PUENTE PIEDRA">PUENTE PIEDRA</option>
                                <option value="PUNTA HERMOSA">PUNTA HERMOSA</option>
                                <option value="PUNTA NEGRA">PUNTA NEGRA</option>
                                <option value="RIMAC">RIMAC</option>
                                <option value="SAN BARTOLO">SAN BARTOLO</option>
                                <option value="SAN BORJA">SAN BORJA</option>
                                <option value="SAN ISIDRO">SAN ISIDRO</option>
                                <option value="SAN JUAN DE LURIGANCHO">SAN JUAN DE LURIGANCHO</option>
                                <option value="SAN JUAN DE MIRAFLORES">SAN JUAN DE MIRAFLORES</option>
                                <option value="SAN LUIS">SAN LUIS</option>
                                <option value="SAN MARTIN DE PORRES">SAN MARTIN DE PORRES</option>
                                <option value="SAN MIGUEL">SAN MIGUEL</option>
                                <option value="SANTA ANITA">SANTA ANITA</option>
                                <option value="SANTA MARIA DEL MAR">SANTA MARIA DEL MAR</option>
                                <option value="SANTA ROSA">SANTA ROSA</option>
                                <option value="SANTIAGO DE SURCO">SANTIAGO DE SURCO</option>
                                <option value="SURQUILLO">SURQUILLO</option>
                                <option value="VILLA EL SALVADOR">VILLA EL SALVADOR</option>
                                <option value="VILLA MARIA DEL TRIUNFO">VILLA MARIA DEL TRIUNFO</option>
                            </select>
                        </div>
                        <div>
                            <label for="p-curricular">Plan curricular:</label>
                            <input type="text" id="p-curricular" name="pcurricular" />
                        </div>
                        <div>
                            <label for="base">Base:</label>
                            <input type="text" id="base" name="base" />
                        </div>
                        <div>
                            <label for="semestre">Semestre:</label>
                            <input type="text" id="semestre" name="semestre" />
                        </div>
                        <div>
                            <label for="seccion">Sección:</label>
                            <input type="text" id="seccion" name="seccion" />
                        </div>
                        <label for="condicion">Condición:</label>
                        <select id="condicion" name="condicion" required>
                            <option value="1">Estudiante</option>
                            <option value="2">Egresado</option>
                        </select>
                        <div>
                            <label for="">Fecha de hoy:</label>
                            <input type="date">
                        </div>
                        <div>
                            <label for="firma">Subir firma:</label>
                            <input id="firma" type="file" value="enviar firma">
                        </div>
                        <div class="form-buttons">
                            <button type="button" onclick="closeRegistroSolicitud()">Siguiente</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <!-- INICIA SEGUNDO FORM-->
            <div id="segundo" style="display: none;">
                <div class="container2">
                    <h2>Primer Requisito: FORMULARIO ÚNICO DE TRÁMITE</h2>
                    <div class="form-group">
                        <label for="nombreDocumento">Nombre del Documento:</label>
                        <input type="text" id="nombreDocumento" value="FUT" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaRegistro">Fecha de Registro:</label>
                        <input type="date" id="fechaRegistro" class="date-picker">
                    </div>
                    <div class="form-group">
                        <label for="archivo1">Archivo:</label>
                        <div class="buttons">
                            <button type="button" class="btn-small">Previsualizar Documento</button>
                            <button type="button" class="btn-small">Eliminar</button>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <h2>Segundo Requisito: RECORD ACADÉMICO</h2>
                    <div class="form-group">
                        <label for="nombreRecord">Nombre:</label>
                        <input type="text" id="nombreRecord" value="Record Académico de Notas" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaRecord">Fecha de Record de Notas de OCRAC:</label>
                        <input type="date" id="fechaRecord" class="date-picker">
                    </div>
                    <div class="form-group">
                        <label for="archivo2">Archivo:</label>
                        <input id="archivo2" type="file" value="enviar record">

                        <div class="buttons">
                            <button type="button" class="btn-small">Eliminar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcionArchivo2">Descripción:</label>
                        <input type="text" id="descripcionArchivo2" placeholder="Adjuntar el archivo en formato pdf">
                    </div>
                </div>

                <div class="container2">
                    <h2>Tercer Requisito: FICHA DE MATRÍCULA</h2>
                    <div class="form-group">
                        <label for="nombreFicha">Nombre:</label>
                        <input type="text" id="nombreFicha" value="Ficha de Matrícula" readonly>
                    </div>
                    <div class="form-group">
                        <label for="archivo3">Archivo:</label>
                        <input id="archivo3" type="file" value="enviar ficha">

                        <div class="buttons">
                            <button type="button" class="btn-small">Eliminar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcionArchivo3">Descripción:</label>
                        <input type="text" id="descripcionArchivo3" placeholder="Adjuntar el archivo en formato pdf" readonly>
                    </div>
                </div>

                <div class="container2">
                    <h2>Cuarto Requisito: DATOS DE LA EMPRESA</h2>
                    <div class="form-group">
                        <label for="nombreEmpresa">Nombre:</label>
                        <input type="text" id="nombreEmpresa" placeholder="Nombre de la empresa">
                    </div>
                    <div class="form-group">
                        <label for="rucEmpresa">RUC:</label>
                        <input type="text" id="rucEmpresa" placeholder="RUC de la empresa">
                    </div>
                    <div class="form-group">
                        <label for="celularRepresentante">Celular del Representante:</label>
                        <input type="text" id="celularRepresentante" placeholder="Celular del representante">
                    </div>
                    <div class="form-group">
                        <label for="emailRepresentante">Email del Representante:</label>
                        <input type="email" id="emailRepresentante" placeholder="Email del representante">
                    </div>
                    <div class="form-group">
                        <label for="provincia">Provincia:</label>
                        <select id="provincia">
                            <option value="">Seleccione una provincia</option>
                            <!-- Tocara poner todo  -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="distrito">Distrito:</label>
                        <select id="distrito">
                            <option value="">Seleccione un distrito</option>

                            <option value="ANCON" default>ANCON</option>
                            <option value="ATE">ATE</option>
                            <option value="BARRANCO">BARRANCO</option>
                            <option value="BREÑA">BREÑA</option>
                            <option value="CARABAYLLO">CARABAYLLO</option>
                            <option value="CHACLACAYO">CHACLACAYO</option>
                            <option value="CHORRILLOS">CHORRILLOS</option>
                            <option value="CIENEGUILLA">CIENEGUILLA</option>
                            <option value="COMAS">COMAS</option>
                            <option value="EL AGUSTINO">EL AGUSTINO</option>
                            <option value="INDEPENDENCIA">INDEPENDENCIA</option>
                            <option value="JESUS MARIA">JESUS MARIA</option>
                            <option value="LA MOLINA">LA MOLINA</option>
                            <option value="LA VICTORIA">LA VICTORIA</option>
                            <option value="LIMA">LIMA</option>
                            <option value="LINCE">LINCE</option>
                            <option value="LOS OLIVOS">LOS OLIVOS</option>
                            <option value="LURIGANCHO">LURIGANCHO</option>
                            <option value="LURIN">LURIN</option>
                            <option value="MAGDALENA DEL MAR">MAGDALENA DEL MAR</option>
                            <option value="MIRAFLORES">MIRAFLORES</option>
                            <option value="PACHACAMAC">PACHACAMAC</option>
                            <option value="PUCUSANA">PUCUSANA</option>
                            <option value="PUEBLO LIBRE">PUEBLO LIBRE</option>
                            <option value="PUENTE PIEDRA">PUENTE PIEDRA</option>
                            <option value="PUNTA HERMOSA">PUNTA HERMOSA</option>
                            <option value="PUNTA NEGRA">PUNTA NEGRA</option>
                            <option value="RIMAC">RIMAC</option>
                            <option value="SAN BARTOLO">SAN BARTOLO</option>
                            <option value="SAN BORJA">SAN BORJA</option>
                            <option value="SAN ISIDRO">SAN ISIDRO</option>
                            <option value="SAN JUAN DE LURIGANCHO">SAN JUAN DE LURIGANCHO</option>
                            <option value="SAN JUAN DE MIRAFLORES">SAN JUAN DE MIRAFLORES</option>
                            <option value="SAN LUIS">SAN LUIS</option>
                            <option value="SAN MARTIN DE PORRES">SAN MARTIN DE PORRES</option>
                            <option value="SAN MIGUEL">SAN MIGUEL</option>
                            <option value="SANTA ANITA">SANTA ANITA</option>
                            <option value="SANTA MARIA DEL MAR">SANTA MARIA DEL MAR</option>
                            <option value="SANTA ROSA">SANTA ROSA</option>
                            <option value="SANTIAGO DE SURCO">SANTIAGO DE SURCO</option>
                            <option value="SURQUILLO">SURQUILLO</option>
                            <option value="VILLA EL SALVADOR">VILLA EL SALVADOR</option>
                            <option value="VILLA MARIA DEL TRIUNFO">VILLA MARIA DEL TRIUNFO</option>
                        </select>
                    </div>

                    <h3>DATOS DEL REPRESENTANTE DE LA EMPRESA</h3>
                    <div class="form-group">
                        <label for="nombreRepresentante">Nombre del Representante:</label>
                        <input type="text" id="nombreRepresentante" placeholder="Nombre del representante">
                    </div>
                    <div class="form-group">
                        <label for="dniRepresentante">DNI del Representante:</label>
                        <input type="text" id="dniRepresentante" placeholder="DNI del representante">
                    </div>
                    <div class="form-group">
                        <label for="direccionRepresentante">Dirección del Representante:</label>
                        <input type="text" id="direccionRepresentante" placeholder="Dirección del representante">
                    </div>
                    <div class="form-group">
                        <label for="departamentoRepresentante">Departamento:</label>
                        <input type="text" id="departamentoRepresentante" placeholder="Departamento">
                    </div>

                    <div class="form-group buttons">
                        <button type="button">Guardar</button>
                        <button type="button">Modificar</button>
                    </div>
                </div>

                <div class="container2">
                    <h2>Quinto Requisito: COMPROBANTE DE PAGO</h2>
                    <div class="form-group">
                        <label for="nombreComprobante">Nombre:</label>
                        <input type="text" id="nombreComprobante" value="Comprobante de Pago" readonly>
                    </div>
                    <div class="form-group">
                        <label for="numeroLiquidacion">Número de Liquidación:</label>
                        <input type="text" id="numeroLiquidacion" placeholder="Ingrese el número de liquidación">
                    </div>
                    <div class="form-group">
                        <label for="archivo4">Archivo:</label>
                        <input id="archivo4" type="file" value="enviar comprobante">

                        <div class="buttons">

                            <button type="button" class="btn-small">Eliminar</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcionArchivo4">Descripción:</label>
                        <input type="text" id="descripcionArchivo4" placeholder="Adjuntar el comprobante de pago en formato pdf" readonly>
                    </div>
                </div>

                <div class="container2">
                    <h2>DOCUMENTO</h2>
                    <div class="form-group">

                        <p>Realice la solicitud por esta página: <a href="https://tramite.unfv.edu.pe/Solicitud_Tramite/" target="_blank">https://tramite.unfv.edu.pe/Solicitud_Tramite/</a></p>

                        <div class="buttons">
                            <button type="button">Descargar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-buttons">
                <button onclick="closeProfileForm()" class="close-btn">
                    Cerrar
                </button>
            </div>
        </main>
    </div>
    <script src="assets/js/mesadepartes.js"></script>
</body>

</html>