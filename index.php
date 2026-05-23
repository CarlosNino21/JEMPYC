<?php
// 1. FORZAR LA ZONA HORARIA DE MÉXICO (Evita que se adelante al jueves por desfases del servidor)
date_default_timezone_set('America/Monterrey');

// 2. Obtener el número del día actual de la semana: 1 (lunes) a 7 (domingo)
$dia_servidor = date('N');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEMPYC | Servicios Industriales, Mantenimiento y Calibración</title>
    <meta name="description" content="Servicios Industriales JEMPYC. Mantenimiento preventivo, correctivo y calibración de básculas, balanzas y equipos de laboratorio.">
    
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
</head>
<body>

    <header class="main-header">
        <div class="header-container">
            
        <div class="logo">
    <a href="php/login.php" aria-label="Ir al panel de administración">
        <img src="img/logo.png" alt="JEMPYC Logo" class="logo-img">
    </a>
</div>
            
            <button class="menu-toggle" aria-label="Abrir menú de navegación">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="main-nav">
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="html/nosotros.html">Nosotros</a></li>
                    <li><a href="html/servicios.html">Servicios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li class="nav-whatsapp">
                        <a href="https://wa.me/5218189992668?text=Hola,%20solicito%20información%20sobre%20sus%20servicios%20industriales." target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    
        <section id="inicio" class="hero-section">
            <div class="hero-content">
                <h1>JEMPYC MONTACARGAS</h1>
                <p>Especialistas en la renta de montacargas, mantenimientos preventivos, trabajos correctivos y reconstrucción completa de equipos industriales.</p>
                <a href="#contacto" class="btn-primary">Solicitar Servicio</a>
            </div>
        </section>
    

        <section id="nosotros-montacargas" class="about-montacargas">
            <div class="container">
                <h1>Acerca de JEMPYC MONTACARGAS</h1>
                <br>
                
                <table class="about-table">
                    <thead>
                        <tr>
                            <th>
                                <img src="img/mision.jpg" alt="Nuestra Misión" loading="lazy" width="300" height="200">
                            </th>
                            <th>
                                <img src="img/experiencia.jpg" alt="Experiencia y Conocimientos" loading="lazy" width="300" height="200">
                            </th>
                            <th>
                                <img src="img/calidad.jpg" alt="Compromiso con la Calidad" loading="lazy" width="300" height="200">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h3>Nuestra Misión</h3>
                                <p>En JEMPYC MONTACARGAS, nos dedicamos a proporcionar servicios de reparación de equipos industriales de la más alta calidad. Nuestro objetivo es garantizar que su maquinaria funcione de manera eficiente y segura, minimizando el tiempo de inactividad.</p>
                            </td>
                            <td>
                                <h3>Experiencia y Conocimientos</h3>
                                <p>Contamos con un equipo de técnicos altamente capacitados y con años de experiencia en la reparación de equipos industriales y conocimiento en diversas marcas de renombre, en JEMPYC MONTACARGAS tenemos el conocimiento para atender sus necesidades específicas.</p>
                            </td>
                            <td>
                                <h3>Compromiso con la Calidad</h3>
                                <p>La calidad es nuestra prioridad en JEMPYC MONTACARGAS. Utilizamos solo piezas y materiales de primera línea para asegurar que cada reparación cumpla con los más altos estándares de la industria. Su satisfacción es nuestra garantía.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="servicios-montacargas" class="services-montacargas">
            <div class="container-full">
                <h1 class="services-title">Servicios</h1>
                <h2 class="services-subtitle">Mantenimiento y renta de Montacargas</h2>
            </div>

            <div class="hero-image-container">
                <img src="img/montacargas.png" alt="Mantenimiento y renta de Montacargas" class="full-screen-img">
            </div>

            <div class="container">
                <br><br>
                <h3 class="services-list-title">Nuestros Servicios:</h3>
                <p class="services-list-inline">
                    Renta de Montacargas &nbsp;//&nbsp; Mantenimiento preventivos &nbsp;//&nbsp; Trabajos Correctivos &nbsp;//&nbsp; Reconstrucción de equipos
                </p>
            </div>
        </section>

        <section id="contacto" class="contacto-opcion-2">
            <div class="container-tarjetas">
                <h2 class="section-title">Comunícate con nosotros</h2>
                
                <div class="tarjetas-wrapper">
                  
                    <div class="tarjeta-item">
                        <div class="tarjeta-header">Atención Inmediata</div>
                        <p class="tarjeta-p">Escríbenos o llámanos directamente desde tu dispositivo móvil.</p>
                        <a href="https://wa.me/528115835548" class="card-btn card-btn-wpp" target="_blank">WhatsApp Directo</a>
                        <a href="tel:8115835548" class="card-btn card-btn-call">Llamar Ahora</a>
                    </div>

                    <div class="tarjeta-item">
                        <div class="tarjeta-header">Horario de Servicio</div>
                        <div class="horarios-compactos">
                            <div class="h-fila <?php echo ($dia_servidor == 1) ? 'h-actual' : ''; ?>"><span class="h-dia">lun</span> <span class="h-horas">09:00 – 17:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 2) ? 'h-actual' : ''; ?>"><span class="h-dia">mar</span> <span class="h-horas">09:00 – 17:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 3) ? 'h-actual' : ''; ?>"><span class="h-dia">mié</span> <span class="h-horas">09:00 – 17:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 4) ? 'h-actual' : ''; ?>"><span class="h-dia">jue</span> <span class="h-horas">09:00 – 17:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 5) ? 'h-actual' : ''; ?>"><span class="h-dia">vie</span> <span class="h-horas">09:00 – 17:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 6) ? 'h-actual' : ''; ?>"><span class="h-dia">sáb</span> <span class="h-horas">09:00 – 13:00</span></div>
                            <div class="h-fila <?php echo ($dia_servidor == 7) ? 'h-actual' : ''; ?>"><span class="h-dia">dom</span> <span class="h-horas">Cerrado</span></div>
                        </div>
                    </div> 

                    <div class="tarjeta-item">
                        <div class="tarjeta-header">Redes Sociales</div>
                        <p class="tarjeta-p">Síguenos en nuestras plataformas digitales para conocer nuestros proyectos, equipos y servicios recientes.</p>
                        
                        <div class="tarjeta-datos">
                            <a href="https://www.instagram.com/jempyc_montacargas?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D" class="card-btn card-btn-insta" target="_blank" rel="noopener noreferrer">
                                Instagram Oficial
                            </a>

                            <div class="datos-contacto-adicionales">
                                <p><strong>Correo Electrónico:</strong><br>
                                    <a href="mailto:montacargas@jempyc.com" class="link-tarjeta">montacargas@jempyc.com</a>
                                </p>
                                <p><strong>Ubicación Base:</strong><br>
                                    <span class="texto-gris">Santa Catarina, Nuevo León, México</span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="mapa-seccion">
            <div class="mapa-container-box">
                <h2 class="mapa-titulo">📍 Ubica nuestra base y calcula tu ruta</h2>
                <div id="map" style="height: 450px; width: 100%;"></div>
            </div>
        </section>

    </main>


    <footer class="main-footer">
    <div class="container footer-content" style="display: flex; justify-content: center; align-items: center; text-align: center; padding: 20px 0;">
        <p>&copy; 2026 JEMPYC - Servicios Industriales. Todos los derechos reservados.</p>
    </div>
</footer>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    
    <script src="js/mapa.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
