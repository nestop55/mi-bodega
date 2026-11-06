<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="../public/styles.css?v=<?php echo filemtime(__DIR__ . '/../public/styles.css'); ?>">
</head>

<body>

    <!-- Barra lateral -->
    <?php
    include '../includes/sidebar.php';
    ?>

    <!-- Contenido de la vista Crear Producto -->
    <main class="main-content">
        <h1>Crear Producto</h1>

        <form class="product-form" action="createProduct.php" method="POST">

            <div class="form-element">
                <label for="product-name">Nombre del producto</label>
                <input type="text" id="product-name" name="product_name" required>
            </div>

            <div class="form-element">
                <label for="product-code">Código</label>
                <input type="text" id="product-code" name="product_code" required>
            </div>

            <div class="form-element">
                <label for="product-supplier-code">Código del proveedor</label>
                <input type="text" id="product-supplier-code" name="product_supplier_code" required>
            </div>

            <div class="form-element">
                <label for="product-category">Categoría</label>
                <select id="product-category" name="product_category" required>
                    <option value="">Seleccione una categoría</option>
                    <option value="Víveres">Víveres</option>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Papelería">Papelería</option>
                </select>
            </div>

            <div class="form-element">
                <label for="product-buy-price">Costo de compra</label>
                <input type="number" id="product-buy-price" name="product_buy_price" step="0.01" required>
            </div>

            <div class="form-element">
                <label for="product-sale-price">Precio de venta</label>
                <input type="number" id="product-sale-price" name="product_sale_price" placeholder="Precio de compra + 30%" step="0.01" readonly required>
            </div>

            <script>
                const buyInput = document.getElementById('product-buy-price');
                const saleInput = document.getElementById('product-sale-price');

                function calcSalePrice() {
                    if (buyInput.value === '') {
                        saleInput.value = '';
                        return;
                    }
                    saleInput.value = (Number(buyInput.value) * 1.30).toFixed(2);
                }
                buyInput.addEventListener('input', calcSalePrice);
            </script>

            <div class="form-element">
                <label for="product-quantity">Cantidad:</label>
                <input type="number" id="product-quantity" name="product_quantity" required>
            </div>

            <div class="form-element">
                <label for="product-description">Descripción del producto</label>
                <input type="text" id="product-description" name="product_description" required>
            </div>

            <button type="submit">Crear Producto</button>
        </form>

    </main>
</body>

</html>