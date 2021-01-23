<?php
    include 'vistas/maestros/paginaMaestra.php';
    $page = new PaginaMaestra();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php $page->getHead(); ?>
</head>
<body>
    <div id="cuerpo">
        <?php
            $page->getCuerpo();
        ?>
    </div>
    <?php $page->getScripts(); ?>
</body>
</html>

