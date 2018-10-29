<?php
// PARA REDIRECCIONAR LA PAGINA
function redirect($page){
    header('location: '.URL_BASE.$page);
}