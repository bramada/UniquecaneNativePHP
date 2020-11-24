<section id="prod">
  <div class="container py-5 my-5">

    <div class="row my-4 justify-content-center">
      <div class="text-center">
        <h1 class="titleUL">Product</h1>
      </div>
    </div>
<?php
error_reporting(0);
$koneksi = mysqli_connect("localhost","root","","krm");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$prod = base64_decode($_GET['q']);
?>


    <div class="row justify-content-center no-gutters">
      <div class="col-md-4 mx-3">
        <div class="card-group">
          <div class="card rounded-0 text-center">
            
            <!-- Product View -->
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM foto_produk WHERE idp=$prod");
            $jml = mysqli_num_rows($query);
            $i = 0;
            while($row=mysqli_fetch_array($query)){ 
              $i++;
            ?>

            <div class="mySlides">
              <div class="numbertext"><?php echo $i . " / " . $jml; ?></div>
              <a href="img/products/ls/<?php echo $row['foto']; ?>" data-lightbox="LS19-005">
                <img class="jumlah card-img-top rounded-0 cursorZoom drift-demo-trigger<?php echo $i; ?> py-4" data-zoom="img/products/ls/<?php echo $row['foto']; ?>" src="img/products/ls/<?php echo $row['foto']; ?>">
              </a>
            </div>
            <?php } ?>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
        </div>
        
        <!-- Thumbnail -->

        <div class="row my-3 mx-0">
        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM foto_produk WHERE idp=$prod");
          $i = 0;
          while($row=mysqli_fetch_array($query)){ 
          $i++;
          ?>
          <div class="col-3 my-1 px-1">
            <img class="demox cursorPointer" src="img/products/ls/<?php echo $row['foto']; ?>" style="width:100%" onclick="currentSlide(<?php echo $i; ?>)" alt="prod<?php echo $i; ?>">
          </div>
          <?php } ?>         
        </div>

      </div>

      <?php
      $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE idp=$prod");
      $row=mysqli_fetch_array($query);
      ?>
      <div class="col-md-5 mx-3 detail">
        <h1><?php echo $row['nama']; ?></h1>
        <hr>
        <p class="text-justify">
          <u>Material : </u><br> 
          <?php echo $row['material']; ?><br><br>
          <u>Dimensions (WxHxD) : </u><br>
          <?php echo $row['w']; ?> x <?php echo $row['h']; ?> x <?php echo $row['d']; ?> cm.
        </p>
      </div>
    </div>   

  </div>
</section>
