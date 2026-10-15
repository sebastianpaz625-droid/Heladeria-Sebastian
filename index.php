<?php
$nombre_heladeria = "Heladería Dulce Antojo";
$nombre_administrador = "Sebastian Paz";
$ciudad = "Pasto";

$edad = 20;

$dia_semana = "martes";
$sabor_disponible = true; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre_heladeria; ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- A.1: Nombre y logotipo o identidad visual -->
    <header>
        <h1>🍦 <?php echo $nombre_heladeria; ?></h1>
        <p>Administrador(a): <?php echo $nombre_administrador; ?> | Ciudad: <?php echo $ciudad; ?></p>
    </header>

    <!-- A.2: Breve descripción del negocio -->
    <section>
        <h2>Sobre Nosotros</h2>
        <p>Disfruta de los mejores helados artesanales elaborados con ingredientes 100% naturales, diseñados para alegrar tus días y compartir en familia.</p>
        
        <!-- Integración de la lógica PHP dentro del diseño (Retos 2, 3 y 4) -->
        <div class="mensajes-php">
            <p><strong>Mensaje para ti:</strong> 
                <?php 
                if ($edad >= 18) {
                    echo "¡Bienvenido! Conoce nuestras promociones especiales.";
                } else {
                    echo "¡Bienvenido! Descubre nuestros deliciosos sabores.";
                }
                ?>
            </p>

            <p><strong>Promoción del día (<?php echo ucfirst($dia_semana); ?>):</strong> 
                <?php 
                if ($dia_semana == "martes") {
                    echo "¡Hoy tenemos 2x1 en conos!";
                } else {
                    echo "Hoy puedes disfrutar de nuestros sabores habituales.";
                }
                ?>
            </p>

            <p><strong>Estado del sabor especial (Chocorrico):</strong> 
                <?php 
                if ($sabor_disponible == true) {
                    echo "¡Este sabor está disponible!";
                } else {
                    echo "Lo sentimos, este sabor está agotado.";
                }
                ?>
            </p>
        </div>
    </section>

    <!-- A.3: Al menos cuatro sabores de helado (con nombre, precio e imagen en tarjetas) -->
    <section>
        <h2>Nuestros Sabores</h2>
        <div class="contenedor-sabores">
            <div class="tarjeta-sabor">
                <img src="https://images.unsplash.com/photo-1560008511-11c63416e52d?w=400" alt="Fresa">
                <h3>Fresa Silvestre</h3>
                <p class="precio">$4.500</p>
            </div>
            <div class="tarjeta-sabor">
                <img src="https://images.unsplash.com/photo-1572490122747-3968b75cc699?w=400" alt="Chocolate">
                <h3>Chocolate Suizo</h3>
                <p class="precio">$5.000</p>
            </div>
            <div class="tarjeta-sabor">
                <img src="https://images.unsplash.com/photo-1501443762994-82bd5dace89a?w=400" alt="Vainilla">
                <h3>Vainilla Clásica</h3>
                <p class="precio">$4.000</p>
            </div>
            <div class="tarjeta-sabor">
                <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?w=400" alt="Maracuyá">
                <h3>Maracuyá Exótico</h3>
                <p class="precio">$4.800</p>
            </div>
        </div>
    </section>

    <!-- A.4: Sección de promociones -->
    <section>
        <h2>Sección de Promociones</h2>
        <div class="seccion-promos">
            <p>🎁 ¡Acércate los fines de semana y llévate un topping gratis en la compra de cualquier helado doble!</p>
        </div>
    </section>

    <!-- A.5: Pie de página con información de contacto ficticia -->
    <footer>
        <p>&copy; 2026 <?php echo $nombre_heladeria; ?>. Todos los derechos reservados.</p>
        <p>Contacto: info@heladeriaduiceantojo.com | Teléfono: (032) 7216535</p>
    </footer>

</body>
</html>