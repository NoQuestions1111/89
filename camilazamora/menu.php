<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Tecnología</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            min-height: 100vh;
            background: #f4f4f4;
            color: #333;
        }

        /* Sidebar Menu */
        .sidebar {
            width: 250px;
            background: #2d2d2d;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .sidebar h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffcc00;
        }
        .sidebar ul {
            list-style: none;
            width: 100%;
            padding: 0;
        }
        .sidebar ul li {
            width: 100%;
        }
        .sidebar ul li a {
            display: block;
            padding: 15px 20px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            background: #333;
            margin-bottom: 5px;
        }
        .sidebar ul li a:hover {
            background: #444;
        }

        /* Main Content */
        .content {
            flex-grow: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            padding: 40px;
        }

        /* Section Card Styles */
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }
        .card h2 {
            color: #2d2d2d;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .card img {
            width: 100%;
            max-width: 250px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .card p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }
        .card button {
            margin-top: 10px;
            padding: 10px 20px;
            background: #2d2d2d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .card button:hover {
            background: #444;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content {
                grid-template-columns: 1fr;
            }
            .sidebar {
                width: 100%;
                padding: 10px 0;
            }
            .sidebar ul li a {
                padding: 10px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar Menu -->
    <nav class="sidebar">
        <h1>Tienda Tech</h1>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#productos">Productos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <!-- Main Content Area -->
    <div class="content">
        <!-- Inicio Section -->
        <section id="inicio" class="card">
            <h2>Inicio</h2>
            <img src="images/inicio.jpg" alt="" />
            <p>Bienvenido a nuestra tienda de tecnología. Descubre lo último en computadoras, teléfonos y accesorios.</p>
            <button>Explorar Más</button>
        </section>

        <!-- Nosotros Section -->
        <section id="nosotros" class="card">
            <h2>Nosotros</h2>
            <p><strong>Misión:</strong> Proveer tecnología de vanguardia accesible para todos.</p>
            <p><strong>Visión:</strong> Ser líderes en tecnología, ofreciendo calidad y servicio excelente.</p>
        </section>

        <!-- Productos Section -->
        <section id="productos" class="card">
            <h2>Productos</h2>
            <img src="ruta_de_imagen_producto.jpg" alt="Imagen de productos">
            <p>Explora nuestra gama de productos de alta tecnología, desde laptops hasta accesorios.</p>
            <button>Ver Catálogo</button>
        </section>

        <!-- Contacto Section -->
        <section id="contacto" class="card">
            <h2>Contacto</h2>
            <form action="#" method="post">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required style="width: 100%; padding: 10px; margin: 5px 0; border-radius: 5px; border: 1px solid #ddd;">
                <input type="email" id="email" name="email" placeholder="Email" required style="width: 100%; padding: 10px; margin: 5px 0; border-radius: 5px; border: 1px solid #ddd;">
                <textarea id="mensaje" name="mensaje" placeholder="Mensaje" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; height: 100px;"></textarea>
                <button type="submit" style="margin-top: 10px; padding: 10px 20px; background: #2d2d2d; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Enviar</button>
            </form>
        </section>
    </div>
</body>
</html>
