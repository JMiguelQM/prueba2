<?php include '../php/db_connection.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munayart - Productos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Productos</h1>
    </header>
    <section>
        <?php
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<h3>" . $row['nombre'] . "</h3>";
                echo "<p>" . $row['descripcion'] . "</p>";
                echo "<p>Precio: " . $row['precio'] . " Bs</p>";
                echo "</div>";
            }
        } else {
            echo "No hay productos disponibles.";
        }

        $conn->close();
        ?>
    </section>
    <footer>
        <p>Munayart - © 2024</p>
    </footer>
</body>
</html>
