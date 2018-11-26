<?php
// Call nama Space* dengan namaspace/namaclass
use listCost\listCost;
// Call File *
require_once "listCost.php";

$listCost = new listCost();

//Show konversi ke Object data API Provinsi RajaOngkir
echo $listCost->index();



?>