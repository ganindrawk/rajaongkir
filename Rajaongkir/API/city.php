<?php
// Call nama Space* dengan namaspace/namaclass
use listCity\listCity;
// Call File *
require_once "listCity.php";

$listCity = new listCity();

//Show konversi ke Object data API City RajaOngkir
//echo $listCity->index();
var_dump($listCity->index());

?>