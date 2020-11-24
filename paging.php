<?php
$content='paging.php';
$title='Paging';
require_once("Template.php");
$koneksi = mysqli_connect("localhost","root","","krm");

$cari = $_GET['cari'];
?>
<center>
<table border="1" class="mt-5 pt-5">
  <tr>
    <th>No</th>
    <th>Nama</th>                         
  </tr>
  <?php 
  $halaman = 5;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($koneksi, "SELECT produk.idp, nama, material, foto_produk.idp, foto FROM produk inner join foto_produk on produk.idp=foto_produk.idp WHERE (nama LIKE '%".$cari."%' OR material LIKE '%".$cari."%')");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($koneksi, "SELECT produk.idp, nama, material, foto_produk.idp, foto FROM produk inner join foto_produk on produk.idp=foto_produk.idp WHERE (nama LIKE '%".$cari."%' OR material LIKE '%".$cari."%')LIMIT $mulai, $halaman ");
  $no =$mulai+1;


  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>                  
      <td><?php echo $data['foto']; ?></td>              
                  
    </tr>

    <?php               
  } 
  ?>
  

</table>          

<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?cari=<?php echo $cari; ?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

  <?php } ?>

</div>

