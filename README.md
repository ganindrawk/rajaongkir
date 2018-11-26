# rajaongkir
Menampilkan Data Ongkos Kirim dari beberapa Jasa Layanan Pengiriman di Indonesia, library ini menggunakan paket Starter (free) dari Raja Ongkir
<p>
Langkah-langkah Menggunakan Library, berikut yang perlu diubah: <br/>
1. env.php <br/>
$env["url"] = "https://api.rajaongkir.com"; // Link Url dari Raja Ongkir.  <br/>
$env["proxy"] = "10.xx.x.xx:xx"; // Jika tidak ada proxy dihapus isinya.  <br/>
 <br/>
2. listProvinsi.php  <br/>
isi kan API Key anda yang didapat dari rajaongkir  <br/>
 <br/>
3. listCity.php  <br/>
isi kan API Key anda yang didapat dari rajaongkir  <br/>
 <br/>
4. listCost.php  <br/>
isi kan API Key anda yang didapat dari rajaongkir  <br/>
 <br/>
</p>
<p> 
Apabila sudah diterapkan dan untuk mencoba apakah berhasil atau tidak buka file: <br/>
1. provinsi.php <br/>
2. city.php <br/>
3. form.html (untuk tes API Cost/Biaya dari API RajaOngkir) <br/>
</p>
<p>
 <p>
 Jika ingin menggunakan pada Code Igniter, copykan semua file di folder library, lalu buat file dengan nama Rajaongkir.php didalam library:
// <!-- Script -->
// <?php
// if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// require_once dirname(__FILE__) . '\Rajaongkir\Rajaongkir.php';
// class Rajaongkir extends \Rajaongkir\Rajaongkir{
//    function __construct()
//    {
//        parent::__construct();
//    }
   
// }
//  <!-- End Script -->

 <h3>Semoga Bermanfaat</h3>
 </p>
