<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="../public/styles.css?v=<?php echo filemtime(__DIR__ . '/../public/styles.css'); ?>">
</head>

<body>

    <!-- Barra lateral -->
    <?php
        include '../includes/sidebar.php';
    ?>
    
    <!-- Contenido de la vista Inventario -->
    <main class="main-content">
        <h1>Inventario</h1>

        <div class="toolbar">
            <input id="search-product" type="search" placeholder="Buscar producto por nombre o código..." class="search">
            <select id="select-categories" class="select">
                <option value="">Todas las categorías</option>
                <option value="Víveres">Víveres</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Papelería">Papelería</option>
            </select>
            <a class="btn-create" href="createProduct.php" draggable="false">
                Crear Producto
            </a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>CÓDIGO</th>
                    <th>PRODUCTO</th>
                    <th>CATEGORÍA</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>ESTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Producto 1</td>
                    <td>Categoría 1</td>
                    <td>Bs. 10,00</td>
                    <td>10</td>
                    <td>Disponible</td>
                    <td class="actions">
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Producto 2</td>
                    <td>Categoría 2</td>
                    <td>Bs. 20,00</td>
                    <td>20</td>
                    <td>Agotado</td>
                    <td class="actions">
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Producto 3</td>
                    <td>Categoría 3</td>
                    <td>Bs. 30,00</td>
                    <td>30</td>
                    <td>Stock bajo</td>
                    <td class="actions">
                        <button class="edit-button">Editar</button>
                        <button class="delete-button">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </main>
</body>

</html>
