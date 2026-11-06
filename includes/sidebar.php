<!-- Sidebar (o barra lateral) se reutiliza en varias páginas 
    a través de un archivo de inclusión:
    
    ?php
        include '../includes/sidebar.php';
    ?>

    Contiene el código HTML de la barra lateral, y se incluye en cada 
    página donde se necesita. Posee los enlaces a las diferentes secciones 
    de la aplicación (Inventario, Ventas...)
    Esto facilita la actualización.
-->

<aside class="sidebar">
    <nav>
        <div class="sidebar-header">
            <h1 class="app-name">Mi Bodega</h1>
        </div>

        <div class="sidebar-menu">
            <a href="../views/inventory.php" class="menu-item" draggable="false">
                <span>Inventario</span>
            </a>
            <a href="#" class="menu-item" draggable="false">
                <span>Ventas</span>
            </a>
            <a href="#" class="menu-item" draggable="false">
                <span>Reposiciones</span>
            </a>
            <a href="#" class="menu-item" draggable="false">
                <span>Proveedores</span>
            </a>
            <a href="#" class="menu-item" draggable="false">
                <span>Clientes</span>
            </a>
            <a href="#" class="menu-item" draggable="false">
                <span>Reportes</span>
            </a>
        </div>

        <div class="sidebar-footer">
            <a href="#" class="menu-item" draggable="false">
                <span>Cerrar sesión</span>
            </a>
        </div>
    </nav>
</aside>