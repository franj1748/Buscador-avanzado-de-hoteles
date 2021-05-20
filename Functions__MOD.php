<?php
/*
Plugin Name: Buscador Avanzado
Plugin URI: https://github.com/franj1748/Buscador-avanzado-de-hoteles
Description: Incruste el mejor buscador avanzado de vuelos y hoteles en su página. 
Version: 1.0
Author: Francisco Elis
Author URI: https://hagamosmarcas.com/
License: GPLv2 o posterior
*/


/* Incrustar los script necesarios en la cabecera de la página para la correcta visualización del buscador. */
function add_script_wp_head(){
    ?>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://www.eurolatina.travel/public/js/bootstrap.js"></script>
        <script src="https://panasystem.eurolatina.travel/public/js/bootstrap-tagsinput.js"></script>
        <script src="https://panasystem.eurolatina.travel/public/js/bootstrap-datepicker.min.js"></script>
    <?php
}

add_action('wp_head', 'add_script_wp_head');