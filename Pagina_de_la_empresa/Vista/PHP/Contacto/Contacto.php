<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - MBJEG Corporation</title>
    <link rel="stylesheet" href="../../CSS/contacto.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../../IMAGENES/ACTUALIZACION_LOGO_DE_EMPRESA.png" alt="Logo MBJEG">
                <h1>MBJEG CORPORATION</h1>
            </div>
            <nav>
                <a href="../index/index.php">Inicio</a>
                <a href="../Nosotros/nosotros.php">Nosotros</a>
                <a href="../Servicios/servicios.php">Servicios</a>
                <a href="../Proyecto/proyecto.php">Proyecto</a>
                <a href="../Contacto/contacto.php">Contacto</a>
            </nav>
        </div>
    </header>

    <section class="titulo-pagina">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>Estamos aquí para ayudarte</p>
        </div>
    </section>


    <section class="contenido-contacto">
        <div class="container">
            <div class="info-contacto">
                <h3>Información de Contacto</h3>
                
                <div class="dato-contacto">
                    <div class="icono-contacto">📍</div>
                    <div>
                        <h4>Dirección</h4>
                        <p>Cl. 5 Sur #72a-69<br>Bogotá D.C., Colombia</p>
                    </div>
                </div>

                <div class="dato-contacto">
                    <div class="icono-contacto">📞</div>
                    <div>
                        <h4>Teléfonos</h4>
                        <p>302 7869437<br>300 8386206</p>
                    </div>
                </div>

                <div class="dato-contacto">
                    <div class="icono-contacto">📧</div>
                    <div>
                        <h4>Email</h4>
                        <p>mbjed951@gmail.com</p>
                    </div>
                </div>

                <div class="dato-contacto">
                    <div class="icono-contacto">🕐</div>
                    <div>
                        <h4>Horario de Atención</h4>
                        <p>Lunes a Viernes<br>9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- FORMULARIO -->
            <div class="formulario-contacto">
                <h3>Envíanos un Mensaje</h3>
                <form action="https://formsubmit.co/mbjeg.corporation@gmail.com" method="POST">
                    <div class="campo-formulario">
                        <label>Nombre Completo</label>
                        <input type="text" name="nombre" required>
                    </div>

                    <div class="campo-formulario">
                        <label>Correo Electrónico</label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="campo-formulario">
                        <label>Teléfono</label>
                        <input type="tel" name="telefono" required>
                    </div>

                    <div class="campo-formulario">
                        <label>Asunto</label>
                        <input type="text" name="asunto" required>
                    </div>

                    <div class="campo-formulario">
                        <label>Mensaje</label>
                        <textarea name="mensaje" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="boton-enviar">Enviar Mensaje</button>
      
                </form>
            </div>
        </div>
    </section>


    <section class="mapa">
        <div class="container">
            <h2>Nuestra Ubicación</h2>
            <div class="contenedor-mapa">

                <p>Cl. 5 Sur #72a-69, Bogotá D.C., Colombia</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="logo-footer">
                <img src="../../IMAGENES/ACTUALIZACION_LOGO_DE_EMPRESA.png" width="50px" heigth="50px">
                <span>MBJEG CORPORATION</span>
            </div>
            <p>&copy; 2024-2025 MBJEG Corporation. Todos los derechos reservados.</p>
            <p>Cl. 5 Sur #72a-69 | Bogotá D.C., Colombia</p>
        </div>
    </footer>
</body>
</html>