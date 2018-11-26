<?php
//echo "ListProvinsi";die;
// require_once realpath(__DIR__ . '/..') . "/req.php";
//        $url = $endPoint->getFullName("list_provinsi");
//        echo $url;die;
//
// require_once realpath(__DIR__ . '/..') . "/req.php";
// echo $proxy;die;

//use getAccessToken\getAccessToken;
namespace listProvinsi;

class listProvinsi
{
    public function __construct()
    {
        
    }

    public function index()
    {
        //require_once "../req.php";

        require_once realpath(__DIR__ . '/..') . "/req.php";
        //echo $proxy;die;
        $url = $endPoint->getFullName("list_provinsi");
        

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_PROXY => $proxy[0], // Aktifkan jika menggunakan Proxy
            CURLOPT_PROXYPORT => $proxy[1], // Aktifkan jika menggunakan Proxy
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "key: bec09b50ded17e874c20ca8960c0238e",
                "postman-token: 2048a7f4-d87a-20e0-823c-b6ba32200441"
  ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $resp = json_decode($response);
       
            return $response;
            
        }
    }
}
