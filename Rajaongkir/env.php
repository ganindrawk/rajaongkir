<?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$env = array();

// Digunakan untuk parameter dalam environment dan
// penggunaanya untuk semua API

// Url diambil dari server dev dan prod dari pihak Rajaongkir
$env["url"] = "https://api.rajaongkir.com";

$env["linkQR"] = "";

$env["client_id"] = "";

$env["client_secret"] = "";


// param username adalah nik yang kita daftarkan atas nama badan terkait
$env["username"] = "";
// $env["username"] = "17150219185233";

$env["reload_page"] = "<script> window.location.reload(); </script>";


// param password adalah hasil dari persetujuan pihak
// BSRE dari hasil registrasi lalu dikirim via email dan
// biasanya akan masuk di spam email
$env["password"] = "";

$env["proxy"] = "10.15.3.21:80"; // Aktifkan jika menggunakan proxy
//$env["proxy"] = "";


