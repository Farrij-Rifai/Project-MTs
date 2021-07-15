<section >
 <div id="carouselExampleIndicators" class="carousel slide mt-3 ml-3 mr-3" data-ride="carousel">
  <ol class="carousel-indicators"> 
    <!--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
    <?php
    foreach ($carousel as $key => $value1) {
      $active = ($key == 0) ? 'active' : '';
      echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $key . '" class="' . $active . '"></li>';
    }
    ?>
  </ol>
  <div class="carousel-inner" role="list_box">
    <?php 
    foreach ($carousel as $key => $value1) { 
      $active = ($key == 0) ? 'active' : '';
              echo '<div class="carousel-item ' . $active . '">
                      <img class="d-block w-100" src="' . base_url() .'assets/foto/carousel/' . $value1['carousel_image'] . '" alt="…">
                    </div>';
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<div class="container-fluid mt-3">
  <div class="container">
    <h3>Sugeng Rawuh</h3>
    <p>Selamat datang di Website Yayasan Bima Bhakti, melalui website ini kami berharap dapat dijadikan sebagai media informasi untuk para dermawan yang telah atau akan ikut beramal, bersodaqoh, menginfaqkan sebagian hartanya untuk anak-anak yatim melalui Yayasan Bima Bhakti.</p>
    <p>Silahkan Anda telusuri website kami ini, agar mengetahui lebih jauh tentang Yayasan Bima Bhakti. Akhir kata atas apa yang telah Anda Infaqkan kami mengucapkan terima kasih yang sebesar-besarnya.</p>
    <p>"Jazakumullah khairan katsira"</p>
  </div> 
</div>

<div id="page-wrap">
  <!-- end header -->
  <div class="side-footer-line"></div>
  <!-- Kolom Pendaftaran -->      
  <div class="container-fluid"> 
    <div class="container">
      <h4>INFORMASI PPDB MTS BIMA BHAKTI PERTIWI</h4>
      <a href="<?php  echo site_url ('home/info_ppdb'); ?>" class="white_bt bt_main">Info PPDB</a>
    </div>
  </div>
  <!-- Akhir Kolom Pendaftaran -->
  <div class="side-footer-line"></div>
<!-- section -->

  <?php   
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>

  <section class="layout_padding">
    <center>
      <h2>INFORMASI</h2>
    </center>
    <div class="row row_row">
      <?php foreach ($berita as $value) : ?>
      <div class="col-sm-6">
        <div class="card border-success">
          <div class="card-body">
            <img class="d-block w-100" src="<?php echo base_url().'assets/foto/berita/'.$value['berita_image'];?>">
            <h5 class="card-title"><?= $value['berita_judul']; ?></h5>
            <p class="card-text"><?= limit_words($value['berita_isi'],20);?></p>
            <a href="<?= base_url(); ?>home/detail/<?= $value['berita_id'];?>" id="detail" type="button" class="btn bg-warning"> detail</a>
          </div>
        </div> 
      </div>
      <?php endforeach; ?> 
    </div>
  </section>
  <div align="center">
      <a href="<?= base_url('home/allberita')?>" type="button" class="btn bg-primary">Tampilkan Semua Berita</a>
  </div>
</div>



<!-- end section -->

<section class="layout_padding_2">
  
  <div class="container-fluid">
    <div class="full text_align_center">
      <h2>Event</h2>
    </div>
    <?php foreach ($event as $value_e) : ?>
    <div class="card bg-dark text-white">
    <img src="<?php echo base_url().'assets/foto/event/'.$value_e['event_image'];?>" class="card-img">
      <div class="card-img-overlay full text_align_center">
        <h5 class="card-title" style="color: white"><?= $value_e['jdl_event']; ?></h5>
        <p class="card-text" style="color: white"><?= limit_words($value_e['desk_event'],50);?></p>
        <p class="card-text" style="color: white">Last updated <?= $value_e['tanggal_event']; ?></p>
      </div>
    </div> 
    <?php endforeach; ?>  
  </div>
  
</section>
<!-- section -->

<!-- end section -->
<!-- section 
<section class="layout_padding_2">
  <div id="page-wrap" style="background-color: green">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="full text_align_center">
          <div class="heading_main center_head_border heading_style_1">
            <h2>Tenaga Pengajar</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            foreach ($guru as $keyg => $valueg) {
              $activeg = ($keyg == 0) ? 'active' : '';
              echo '<li data-target="#carouselId" data-slide-to="' . $keyg . '" class="' . $activeg . '"></li>';
            }
            ?>
        </ol>
        <div class="multi-carousel-inner row w-100 mx-auto" role="listbox">
          <?php 
          foreach ($guru as $keyg => $valueg) {
            $activeg = ($keyg == 0) ? 'active' : '';
                    echo '<div class="multi-carousel-item ' . $activeg . ' col-md-4"> 
                            <div class="card">
                              <img class="card-img-top w-100" src="' . base_url() .'assets/foto/guru/' . $valueg['foto_guru'] . '" alt="…">
                              <div class="card-body">
                                <h4 class="card-title">' . $valueg['nama_guru'] . '</h4>
                                <p class="card-text">Text</p>
                              </div>
                            </div>
                          </div>';
          }
          ?>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
  </div>
</div>
</section> -->


<section class="layout_padding_2">
  <div id="page-wrap" style="background-color: green">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="full text_align_center">
          <div class="heading_main center_head_border heading_style_1">
            <h2>Tenaga Pengajar</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="wrapper">
        <div class="item">
      
            <?php $i = 1;
            foreach ($guru as $value1) : ?>

                  <div class="col-sm-3 mb-3">
                    <div class="card border-success">
                      <div class="card-body">
                        <img class="d-block w-100" src="<?php echo base_url().'assets/foto/guru/'.$value1['foto_guru'];?>">
                        <h6 class="card-title text_align_center mt-3" style="font-size: 15px;"><?= $value1['nama_guru']; ?></h6>
                        
                      </div>
                    </div> 
                  </div>
                
            <?php endforeach; ?>  
        </div>
      </div>
    </div>
  </div>
</div>
</section>
 end section 