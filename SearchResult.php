<?php 
$content='SearchResult.php';
$title='Search Result';
require_once("Template.php");
$koneksi = mysqli_connect("localhost","root","","krm");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];

    $halaman = 6;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($koneksi, "SELECT produk.idp, nama, material, foto_produk.idp, foto FROM produk inner join foto_produk on produk.idp=foto_produk.idp WHERE (nama LIKE '%".$cari."%' OR material LIKE '%".$cari."%')  AND foto LIKE '%b.jpg' ");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);
    $query = mysqli_query($koneksi, "SELECT produk.idp, nama, material, foto_produk.idp, foto FROM produk inner join foto_produk on produk.idp=foto_produk.idp WHERE (nama LIKE '%".$cari."%' OR material LIKE '%".$cari."%') AND foto LIKE'%b.jpg' LIMIT $mulai, $halaman ");
    $no =$mulai+1;
?>

<section id="productList" class="my-5 py-5">
    <div class="container">

        <div class="row mt-4 pb-5 justify-content-center">
            <div class="text-center">
                <h1 class="titleUL">Search Result</h1>
            <?php
                echo "Search for : <b> \"".$cari."\"</b>&nbsp;&nbsp;|&nbsp;&nbsp; ";
                echo "Found : <b> ".$total."</b>";
            ?>
            </div>
        </div>

        <div class="row justify-content-center">
            
            <?php
            if ($total==0){ 
                echo "<h3 class= mt-5 pt-5 style= color:gray; > Not Found </h3><div class=spacer> </div>";
            }else{
                while($row=mysqli_fetch_array($query)){ 
            ?>

            <div class="col-md-4 px-3 mb-4">
                <div class="sCard card rounded-0 text-center search-list border-0 shadow">
                    <a href="index?page=product&q=<?php echo base64_encode($row['idp']) ?>">
                        <img src="img/products/ls/<?php echo $row['foto'] ?>" class="card-img-top pt-4 rounded-0" alt="Product Image">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['nama']; ?></h4>
                            <p><?php echo $row['material']; ?></p>
                        </div>
                    </a>
                </div>
            </div>

            <?php 
            }// while 
            }// if
            ?>
            
            
        </div>
        
        <div class="row justify-content-center">
            <?php 

            //Navigasi ke sebelumnya
            if ( $page > 1 ) {
                $link = $page-1;
                $prev = "<li class='page-item'><a href='?cari=$cari&halaman=$link' class='page-link'><span class='fa fa-angle-left'></span></a></li>";
                } else {
                $prev = "<li class='page-item disabled'><a href='#' class='page-link'><span class='fa fa-angle-left'></span></a></li>";
            }
            
            //Navigasi ke selanjutnya
            if ( $page < $pages ) {
                $link = $page+1;
                $next = "<li class='page-item'><a href='?cari=$cari&halaman=$link' class='page-link'><span class='fa fa-angle-right'></span></a></li>";
                } else {
                $next = "<li class='page-item disabled'><a href='#' class='page-link'><span class='fa fa-angle-right'></span></a></li>";
            }
            
            //Navigasi ke awal
            if ( $page == 1 ){
                $awal = "<li class='page-item disabled'><a href='#' class='page-link rounded-0'><span class='fa fa-angle-double-left'></span></a></li>";
            }else{
                $awal = "<li class='page-item'><a href='?cari=$cari&halaman=1' class='page-link rounded-0'><span class='fa fa-angle-double-left'></span></a></li>";
            }
            
            //Navigasi ke akhir
            if ( $page == $pages ){
                $akhir = "<li class='page-item disabled'><a href='#' class='page-link rounded-0'><span class='fa fa-angle-double-right'></span></a></li>";
            }else{
                $akhir = "<li class='page-item'><a href='?cari=$cari&halaman=$pages' class='page-link rounded-0'><span class='fa fa-angle-double-right'></span></a></li>";
            }
            
            //Navigasi nomor
            $nmr = '';
            for ( $i = 1; $i<= $pages; $i++ ){
                if ( $i == $page ) {
                    $nmr .= "<li class='page-item active'><a href='#' class='page-link'> $i </a></li></li>";
                } else {
                    $nmr .= "<li class='page-item'><a href='?cari=$cari&halaman=$i' class='page-link'> $i </a></li></li>";
                }
            }
            ?>
        </div>

<?php } // isset cari?>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <?php echo $awal ?>
                <?php echo $prev ?>
                <?php echo $nmr ?>
                <?php echo $next ?>
                <?php echo $akhir ?>
                </li>
            </ul>
        </nav>
    
    </div><!-- container -->
</section>

<script>
    document.getElementById("footer").style.display = "none"; 
</script>

<!-- FOOTER -->
<footer class="footer py-1">
      <div class="container">
        <div class="row">
          <div class="col-8 mt-3">
            <p>Copyright 2020 © Uniquecane | Rattan, Wooden and Metal Furniture Manufacturer</p>
          </div>
          <div class="col-4 mt-1">
            <div class="row justify-content-end">
            <a class="btn btn-primary rounded-circle sosmed"><span class="fa fa-facebook"></span></a>
            <a class="btn btn-danger rounded-circle sosmed"><span class="fa fa-instagram"></span></a>
            <a class="btn btn-info rounded-circle sosmed"><span class="fa fa-twitter"></span></a>
            <a class="btn btn-danger rounded-circle sosmed"><span class="fa fa-pinterest"></span></a>
            </div>
          </div>
        </div>
      </div>      
      <button onclick="topFunction()" id="myBtnSc" title="Go to top"><span class="fa fa-caret-up" style="font-size:20px;"></span></button>
</footer>
<!-- END FOOTER -->