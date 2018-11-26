<?php
// Call nama Space* dengan namaspace/namaclass
use listProvinsi\listProvinsi;
// Call File *
require_once "listProvinsi.php";

$listProvinsi = new listProvinsi();

//Show konversi ke Object data API Provinsi RajaOngkir
echo $listProvinsi->index();

?>