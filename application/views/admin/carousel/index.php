<!-- ============================================================== -->
<!-- Page wrapper  --> 
<!-- ============================================================== -->
<div class="content-wrapper"> 

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <b><h1 class="page-title"><?php echo $judul; ?></h1></b>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<section class="content">
    <div class="container-fluid">
        <div class="breadcrumb">
            <div class="card-footer clearfix">
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Carousel</button>
            </div>
        </div>
        <hr/>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Carousel <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php   
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable Carousel</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <th width="20">No</th>
                    <th width="380">Judul</th>
                    <th width="200">Tanggal upload</th>
                    <th width="150">Foto</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($carousel as $value) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $value['jdl_carousel']; ?></td>
                        <td><?= $value['tanggal_carousel']; ?></td>
                        <td>
                            <img src="<?php echo base_url().'assets/foto/carousel/'.$value['carousel_image'];?>" width="150">
                        </td>
                        <td>
                            <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id_carousel'];?>"> detail</a>
                            <a id="detail" type="button" data-toggle="modal" data-target="#editModal<?= $value['id_carousel'];?>" class="btn bg-success">edit</a>
                            <a href="<?= base_url(); ?>admin/carousel/hapus/<?= $value['id_carousel'];?>" class="btn bg-danger" onclick="return confirm('carousel akan dihapus?')" >hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>
</div>
</section> 
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form tambah carousel</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('admin/carousel/simpan_post')?>" method="post" enctype="multipart/form-data">
            <h5>Judul Carousel:</h5>
            <small>#wajib diisi!</small>
            <input type="text" name="judul" class="form-control" placeholder="Judul carousel" required/><br/>
            <h5>Upload Foto</h5>
            <small>#wajib diisi!</small><br/>
            <input type="file" name="filefoto" required><br/><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- End Modal Tambah -->

<!-- Modal Detail -->
<?php $no = 0;
foreach ($carousel as $value) : $no++ ?>

<div class="modal fade" id="detailModal<?=$value['id_carousel'];?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Detail carousel</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="card mb-3 card-body">
            <h2><?= $value['jdl_carousel']; ?></h2>
            <div class="card-body">
                <center><img src="<?php echo base_url().'assets/foto/carousel/'.$value['carousel_image'];?>" width="700"></center>
                <p class="card-text"><small class="text-muted">Diupload <?= $value['tanggal_carousel']; ?></small></p>
            </div>      
        </div>
        <div class="modal-footer">
            <button type="close" data-dismiss="modal" class="btn btn-primary">Close</button>
        </div>
    </div>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- End Modal Detail -->

<!-- Modal Edit -->
<?php $no = 0;
foreach ($carousel as $value) : $no++ ?>

<div class="modal fade" id="editModal<?=$value['id_carousel'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form edit carousel</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/carousel/ubah_data/<?php echo $value['id_carousel'];?>" method="post" enctype="multipart/form-data">
            <h5>Judul Carousel:</h5>
            <small>#wajib diisi!</small>
            <input value="<?= $value['jdl_carousel']; ?>" type="text" name="judul" class="form-control" placeholder="Judul carousel" required/><br/>
            <h5>Upload Foto</h5>
            <small>#wajib diisi!</small>
            <input type="file" name="filefoto"><br/><br/>
            <img src="<?php echo base_url().'assets/foto/carousel/'.$value['carousel_image'];?>" width="100">
            <div class="modal-footer">
                <button type="close" data-dismiss="modal" class="btn btn-primary">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- End Modal Edit -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
