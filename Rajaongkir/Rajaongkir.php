<?php

namespace Rajaongkir;

use listProvinsi\listProvinsi;
use listCity\listCity;
use listCost\listCost;

class Rajaongkir
{

    var $proxy_host;
    var $proxy_port;

    public function __construct($proxy_host = null, $proxy_port = null)
    {
        $this->proxy_host = $proxy_host;
        $this->proxy_port = $proxy_port;
    }

    public function index()
    {
        // echo $this->proxy_host."<br>";
        // echo $this->proxy_port;
        $view = "<div style='margin-top:100px;text-align : center;font-size:2.4em'>Welcome to RajaOngkir Library, API Service from RajaOngkir</div>";
        $view .= "<br><img src='' width='500' height='250' style='display: block;margin-left: auto;margin-right: auto;'>";
        $view .= "<br><hr>";
        $view .= "<h4 style='text-align : center; padding:0'>&copy; Indra WK </h4>";
        $view .= "<hr>";
        return $view;

    }

    // di CI untuk memanggil gunakan $this->rajaongkir->listProvinsi();
    public function listProvinsi()
    {
        require_once "API/listProvinsi.php";
        $listProvinsi = new listProvinsi();
        return $listProvinsi->index();
       //  echo "listProvinsi";
    }
    // di CI untuk memanggil gunakan $this->rajaongkir->listCity();
    public function listCity()
    {
        require_once "API/listCity.php";
        $listCity = new listCity();
        return $listCity->index();
       //  echo "listCity";
    }
    // di CI untuk memanggil gunakan $this->rajaongkir->listCost();
    public function listCost()
    {
        require_once "API/listCost.php";
        $listCost = new listCost();
        return $listCost->index();
       //  echo "listCity";
    }

}
