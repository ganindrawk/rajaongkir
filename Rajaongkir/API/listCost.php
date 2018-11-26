<?php


namespace listCost;

class listCost
{
    public function __construct()
    {
        
    }

    public function index() // see cost.php
    {
        //require_once "../req.php";

        require_once realpath(__DIR__ . '/..') . "/req.php";
        //echo $proxy;die;
        $url = $endPoint->getFullName("list_cost");
        $data = str_replace("https://api.rajaongkir.com/starter/cost?", " ", $url);
        //echo $data;die;
        $url = str_replace(" ", "%20", $url);
        //echo $url;die;

        // $origin='501';
        // $destination='114';
        // $weight='1700';
        // $courier='jne';

        //echo $origin;die;


        // $data = array(
        //         'origin' => $this->origin,
        //         'destination'=>$this->destination,
        //         'weight' => $this->weight,
        //         'courier' => $this->courier,
        //     );
        
        //var_dump($data);die;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            //CURLOPT_PROXY => $proxy[0], // Aktifkan jika menggunakan Proxy
            //CURLOPT_PROXYPORT => $proxy[1], // Aktifkan jika menggunakan Proxy
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            //CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "key: Your Api Key",
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
