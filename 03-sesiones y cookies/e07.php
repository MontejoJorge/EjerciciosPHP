<?php
session_start();


function realizarAcccion($accion){
    switch ($accion){
        case "insertar":
            if (isset($_GET["idProducto"])){
                $productoComprado=$_GET["idProducto"];
                array_push($_SESSION["cesta"],"$productoComprado");
            }
        break;
        case "vaciar":
            unset($_SESSION["cesta"]);
        break;
        case "favorito":
            if (isset($_GET["idProducto"])){
                $idFavorito=$_GET["idProducto"];
                if (isset($_COOKIE["favoritos"])){
                    $favoritos = explode(",",$_COOKIE["favoritos"]);
                } else {
                    $favoritos = [];
                }
                array_push($favoritos,$idFavorito);
                setcookie("favoritos", implode(",",$favoritos), time()+7);
            }
        break;


    }

}
function calcularPrecio($productosComprados, $productos){
    
    $precioTotal = 0;
    foreach ($productosComprados as $idProducto) {
        $precioTotal += $productos[$idProducto]['precio'];
    }
    return $precioTotal;
}

function esFavorito($id){
    $favoritos = explode(",",$_COOKIE["favoritos"]);
    echo $favoritos;

    if (array_key_exists($id,$favoritos)) {
        return "red";
    } else {
        return "black";
    }
    

}

require_once "e07.datos.php";

if(!isset($_SESSION["cesta"])){
    $_SESSION["cesta"]=array();
}

if(isset($_GET["accion"])){
    $accion=$_GET["accion"];
    realizarAcccion($accion);
}

if(isset($_SESSION["cesta"])){
    $cesta = $_SESSION["cesta"];

    $precioTotal = calcularPrecio($cesta, $productos);
}



require "e07.view.php";