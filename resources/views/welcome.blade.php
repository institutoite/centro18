<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Centro Médico 18 de Marzo</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Reset de estilos básicos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            color: #333;
            background-color: #f3f4f6;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            z-index: 1000;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        .login-btn {
            background-color: #fff;
            color: #007bff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .login-btn:hover {
            background-color: #f0f0f0;
        }

        /* Sección principal */
        .hero {
            padding-top: 6rem;
            width: 100%;
            text-align: center;
            background-color: #e9f0f8;
            padding: 3rem 1rem;
        }
        .hero h1 {
            font-size: 2.5rem;
            color: #007bff;
        }
        .hero p {
            font-size: 1.2rem;
            color: #333;
            max-width: 800px;
            margin: 1rem auto;
        }
        .hero .action-btn {
            background-color: #007bff;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 1rem;
            display: inline-block;
        }
        .action-btn:hover {
            background-color: #0056b3;
        }

        /* Secciones */
        .section {
            padding: 2.5rem 1rem;
            max-width: 1000px;
            margin: 2rem auto;
            text-align: center;
        }
        .section h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .section p {
            font-size: 1rem;
            line-height: 1.6;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                background-color: #007bff;
                position: absolute;
                top: 60px;
                right: 20px;
                width: 150px;
                border-radius: 8px;
                padding: 1rem;
            }
            nav ul.show {
                display: flex;
            }
            .menu-toggle {
                display: block;
                cursor: pointer;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Centro Médico 18 de Marzo</div>
        <nav>
            <ul id="menu">
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#beneficios">Beneficios</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="{{ url('admin/login') }}" class="login-btn">Iniciar sesión</a></li>
            </ul>
            <span class="menu-toggle" onclick="toggleMenu()">☰</span>
        </nav>
    </header>

    <div class="hero">

    </div>
    <!-- Sección principal -->
    <section class="hero">
        <h1>Bienvenido al Centro Médico 18 de Marzo</h1>
        <p>Ofrecemos atención médica de calidad y un sistema de gestión que optimiza nuestros recursos para garantizar el mejor servicio a nuestra comunidad. Explora nuestros servicios y descubre cómo estamos mejorando la salud de nuestra comunidad.</p>
        <a href="#servicios" class="action-btn">Ver Servicios</a>
    </section>

    <!-- Sección de servicios -->
    <section id="servicios" class="section">
        <h2>Nuestros Servicios</h2>
        <p>Contamos con una amplia gama de servicios médicos, desde atención primaria hasta especialidades, diseñados para cubrir las necesidades de nuestra comunidad. Cada servicio está optimizado para ofrecer una atención eficaz y oportuna.</p>
    </section>

    <!-- Sección de beneficios -->
    <section id="beneficios" class="section" style="background-color: #f9f9f9;">
        <h2>Beneficios de nuestro sistema</h2>
        <p>Nuestro sistema de gestión de honorarios médicos e indumentarias garantiza transparencia y eficiencia. Ayudamos al personal a concentrarse en lo que realmente importa: la salud de nuestros pacientes.</p>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="section">
        <h2>Contacto</h2>
        <p>Estamos ubicados en la Avenida Cumavi, Santa Cruz de la Sierra. Contáctanos para conocer más sobre nuestros servicios o cómo podemos ayudarte. Teléfono: (591) 123-4567</p>
    </section>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
