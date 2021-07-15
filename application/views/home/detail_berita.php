
<div class="countainer"> 
  <div id="page-wrap">
    <div class="row row_row">
      <div class="card-body">
        <div class="card mb-3 card-body">
          <h2 class="card-title"><?= $berita['berita_judul']; ?></h2>
          <div class="card-body">
            <img src="<?php echo base_url().'assets/foto/berita/'.$berita['berita_image'];?>" class="card-img-top">
            <p class="card-text"><?= $berita['berita_isi']; ?></p>
            <p class="card-text"><small class="text-muted">Diupload <?= $berita['berita_tanggal']; ?></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>


    