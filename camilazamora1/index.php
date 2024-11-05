<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Tecnología</title>
    <style>
    
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

        .animar {
    display: block;
    transition: transform 0.3s ease;
}

.animar:hover {
    transform: scale(1.05);
}
       
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

        .extra-products {
            display: none;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
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

    <div class="content">

        <section id="inicio" class="card animar">
    <h2>Inicio</h2>
    <img src="images/inicio.jpg" alt="" />
    <p>Bienvenido a nuestra tienda de tecnología. Descubre lo último en computadoras, teléfonos y accesorios.</p>
    <button>Explorar Más</button>
</section>


<section id="nosotros" class="card animar">
            <h2>Nosotros</h2>
            <p><strong>Misión:</strong> Vender productos tecnologicos a un gran y accesible precio.</p>
            <p><strong>Visión:</strong> Ser líderes en tecnología, ofreciendo calidad y servicio excelente.</p>
        </section>

        <!-- Productos Section -->
        <section id="productos" class="card animar">
            <h2>Productos</h2>
            <img src="images/producto.jpg" alt="">
            <p>Explora nuestra gama de productos de alta tecnología, desde laptops hasta accesorios.</p>
            <button onclick="mostrarCatalogo()">Ver Catálogo</button>
        </section>

        <!-- Productos adicionales (inicialmente ocultos) -->
        <section id="catalogo" class="extra-products">
            <!-- Producto 1 -->
            <div class="card animar">
                <h2>Producto 1</h2>
                <img src="images/Producto1.jpg" alt="">
                <p>Celular HYLine PRO X 6.51"| 8GB | 256 GB Negro</p>
                <p>Precio: $2,858.33</p>
                <button>Agregar al carrito</button>
            </div>
            <!-- Producto 2 -->
            <div class="card animar">
                <h2>Producto 2</h2>
                <img src="images/Producto2.jpg" alt="Producto 2">
                <p> Black Dragon SG H3 / Multiplataforma / Negro</p>
                <p> Precio $999.23</p>
                <button>Agregar al carrito</button>
            </div>
            <!-- Producto 3 -->
             
            <div class="card animar">
                <h2>Producto 3</h2>
                <img src="images/Producto3.jpg" alt="Producto 3">
                <p>Laptor Gamer MSI GF67</p>
                <p>Precio: $26,890.45</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="card animar">
                <h2>Producto 4</h2>
                <img src="images/Producto4.jpg" alt="Producto 3">
                <p>Mouse Ocelot / Gamer / Alambrico / usb / dpi</p>
                <p>Precio: $750.58</p>
                <button>Agregar al carrito</button>
            </div>

            


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

    <script>
        function mostrarCatalogo() {
            const catalogo = document.getElementById('catalogo');
            catalogo.style.display = (catalogo.style.display === 'none' || catalogo.style.display === '') ? 'grid' : 'none';
        }
    </script>
</body>
</html>

