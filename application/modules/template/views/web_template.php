<html>
<?php
//session_start();
//include_once 'includes/funciones.php';
include_once 'includes/cabecera.php';//headers
error_reporting(E_ALL);
setlocale(LC_ALL,"es_ES");

?>

<body>
    
    <div id="contenedor_central">
        <div id="logo">
            AQUI EL LOGO CON ENLACE AL INICIO
        </div>
        <div id="menu_arriba">
            <?php 
            $this->load->view('menu');
        ?>
        </div>    
        
                        
        <div id="parte_central">
        <?php 
        
        if (!isset($view_file)) {
            $view_file = "";
        }


        if (!isset($module)) {
            $module = $this->uri->segment(1);
        }


        if (($view_file!="") && ($module!="")) {
            $path = $module."/".$view_file;
            
            $this->load->view($path);
        }/*else {
            echo nl2br($page_content);
        }*/
        
        ?>
        </div>

        <!--<div id="parte_derecha">
            PARTE DERECHA
        </div>-->
    </div>
    <?php 
        $this->load->module('template');
        $this->template->pie();
    ?>
</body>
</html>