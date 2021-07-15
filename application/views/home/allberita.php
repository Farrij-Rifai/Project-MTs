
  <?php   
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?> 
<section class="layout_padding">
  <div id="page-wrap">
    <div style="margin: 5px;">
    <h4 style="text-align: center; margin-top: 5px; ">BERITA</h4>
 <?php foreach ($berita as $value) : ?>
   
    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-5">
            <img src="<?php echo base_url().'assets/foto/berita/'.$value['berita_image'];?>" style="width: 500px;height: 400px; background: #808080; ">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              
              <a href="<?= base_url('home/detail')?>"><h5 class="card-title" style="font-size: 10px"><?php echo $value['berita_judul'] ?></h5></a>
              <p class="card-text"><?= limit_words($value['berita_isi'],100);?>...</p>
              <a href="<?= base_url(); ?>home/detail/<?= $value['berita_id'];?>" id="detail" type="button" class="btn bg-warning">selengkapnya</a>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
       
       
  <?php endforeach; ?>
  </div>
</div>
</section>
    