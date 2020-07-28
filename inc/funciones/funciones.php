<?php



    function mostrarusuario()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_cliente, nombre_cliente,apellido_paterno,apellido_materno FROM tabla_cliente');
        } catch (Exception $e) {
            echo "El error es" . $e->getMessage();
            return false;
        }
    }
    function mostrarcategoria()
    {

        try {
            include 'conexion.php';
            return $conn->query('SELECT id_categoria, nombre_categoria FROM tabla_categoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }

    }
    function mostrarsubcategoria()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_subcategoria, nombre_subcategoria FROM tabla_subcategoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }
    function mostraropcategoria()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_op_categoria, nombre_op_categoria FROM tabla_op_categoria');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }
    function mostrarmarca()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_marca, nombre_marca FROM tabla_marca');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }

    function mostrartalla()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_talla,nombre_talla FROM tabla_talla');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;

        }
    }

    function mostrarcolor()
    {
        try {
            include 'conexion.php';
            return $conn->query('SELECT id_color, nombre_color FROM tabla_color');
        } catch (Exception $e) {
            echo "El error es: " . $e->getMessage();
            return false;
        }
    }

?>
