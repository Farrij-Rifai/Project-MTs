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
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i> Tambah Nilai</button>
            </div>
        </div>
        
        <!-- Flash data -->
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Nilai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
        <h3 class="card-title">DataTable Berita</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <th width="20">No</th>
                    <th width="380">Nama</th>
                    <th width="200">NIS</th>
                    <th width="150">Total Nilai</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php $i = 1;
                foreach ($nilai as $value) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $value['nama_siswa']; ?></td>
                        <td><?= $value['nis_siswa']; ?></td>
                        <td></td>
                        <td>
                            <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id'];?>"> detail</a>
                            <a id="detail" type="button" data-toggle="modal" data-target="#editModal<?= $value['id'];?>" class="btn bg-success">edit</a>
                            <a href="<?= base_url(); ?>admin/nilai/hapuspas7/<?= $value['id'];?>" class="btn bg-danger" onclick="return confirm('nilai akan dihapus?')" >hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div> 
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form tambah data</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('admin/nilai/simpan_data')?>" method="post" enctype="multipart/form-data">
            <h4><strong>Identitas Siswa.</strong></h4>
            <hr>
            <h5>Nama Siswa:</h5>
            <input type="text" name="nama" class="form-control" placeholder="nama siswa" required/><br/>
            <h5>NIS Siswa:</h5>
            <input type="text" name="nis" class="form-control" placeholder="nis siswa" required/><br/>
            <h5>Kelas:</h5>
            <input type="text" name="kelas" class="form-control" value="7" readonly/><br/>
            <h5>Kategori:</h5>
            <input type="text" name="kategori" class="form-control" value="PAS" readonly/><br/>
            <h4><strong>Mata Pelajaran.</strong></h4>
            <hr>
            <h5>IPA:</h5>
            <input type="text" name="ipa" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>IPS:</h5>
            <input type="text" name="ips" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Matematika:</h5>
            <input type="text" name="mtk" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Indonesia:</h5>
            <input type="text" name="bindo" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Inggris:</h5>
            <input type="text" name="bing" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Jawa:</h5>
            <input type="text" name="bjawa" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PKN:</h5>
            <input type="text" name="pkn" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Seni Budaya:</h5>
            <input type="text" name="sbk" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PJOK:</h5>
            <input type="text" name="pjok" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>TIK:</h5>
            <input type="text" name="tik" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Prakarya:</h5>
            <input type="text" name="prakarya" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Bahasa Arab:</h5>
            <input type="text" name="barab" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Akidah:</h5>
            <input type="text" name="akidah" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Akhlak:</h5>
            <input type="text" name="akhlak" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Qur'an dan Hadits:</h5>
            <input type="text" name="quran_hadits" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>SKI:</h5>
            <input type="text" name="ski" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Kepesantrenan:</h5>
            <input type="text" name="pesantren" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Fiqih:</h5>
            <input type="text" name="fiqih" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Tahfidz:</h5>
            <input type="text" name="tahfidz" class="form-control" placeholder="nilai siswa"/><br/>
            <h4><strong>Ekstrakurikuler</strong></h4>
            <hr>
            <h5>Pramuka:</h5>
            <input type="text" name="pramuka" class="form-control" placeholder="nilai siswa"/><br/>
            <h5>Hadroh:</h5>
            <input type="text" name="hadroh" class="form-control" placeholder="nilai siswa"/><br/>
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
foreach ($nilai as $value) : $no++ ?>

<div class="modal fade" id="detailModal<?=$value['id'];?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Detail data nilai</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body table-responsive">
            <div class="modal-content pt-3">
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Data Siswa :</h4>
                    <tbody> 
                        <tr>
                            <th style="width:35%">Nama</th>
                            <td><span><?= $value['nama_siswa'];?></span></td>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <td><span><?= $value['nis_siswa'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td><span><?= $value['kelas_siswa'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><span><?= $value['kategori'];?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Nilai Mata Pelajaran :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">IPA</th>
                            <td><span><?= $value['ipa'];?></span></td>
                        </tr>
                        <tr>
                            <th>IPS</th>
                            <td><span><?= $value['ips'];?></span></td>
                        </tr>
                        <tr>
                            <th>Matematika</th>
                            <td><span><?= $value['matematika'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Indonesia</th>
                            <td><span><?= $value['bhs_indo'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Inggris</th>
                            <td><span><?= $value['bhs_ing'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Jawa</th>
                            <td><span><?= $value['bhs_jawa'];?></span></td>
                        </tr>
                        <tr>
                            <th>PKN</th>
                            <td><span><?= $value['pkn'];?></span></td>
                        </tr>
                        <tr>
                            <th>Seni Budaya</th>
                            <td><span><?= $value['sbk'];?></span></td>
                        </tr>
                        <tr>
                            <th>PJOK</th>
                            <td><span><?= $value['pjok'];?></span></td>
                        </tr>
                        <tr>
                            <th>TIK</th>
                            <td><span><?= $value['tik'];?></span></td>
                        </tr>
                        <tr>
                            <th>Prakarya</th>
                            <td><span><?= $value['prakarya'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Arab</th>
                            <td><span><?= $value['bhs_arab'];?></span></td>
                        </tr>
                        <tr>
                            <th>Akidah</th>
                            <td><span><?= $value['akidah'];?></span></td>
                        </tr>
                        <tr>
                            <th>Akhlak</th>
                            <td><span><?= $value['akhlak'];?></span></td>
                        </tr>
                        <tr>
                            <th>Qur'an dan Hadits</th>
                            <td><span><?= $value['quran_hadits'];?></span></td>
                        </tr>
                        <tr>
                            <th>SKI</th>
                            <td><span><?= $value['ski'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kepesantrenan</th>
                            <td><span><?= $value['pesantren'];?></span></td>
                        </tr>
                        <tr>
                            <th>Fiqih</th>
                            <td><span><?= $value['fiqih'];?></span></td>
                        </tr>
                        <tr>
                            <th>Tahfidz</th>
                            <td><span><?= $value['tahfidz'];?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Nilai Mata Pelajaran :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">Pramuka</th>
                            <td><span><?= $value['pramuka'];?></span></td>
                        </tr>
                        <tr>
                            <th>Hadroh</th>
                            <td><span><?= $value['hadroh'];?></span></td>
                        </tr>
                    </tbody>
                </table>
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
foreach ($nilai as $value) : $no++ ?>

<div class="modal fade" id="editModal<?=$value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form edit nilai</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/nilai/edit_data/<?php echo $value['id'];?>" method="post" enctype="multipart/form-data">
            <h4><strong>Identitas Siswa.</strong></h4>
            <hr>
            <h5>Nama Siswa:</h5>
            <input type="text" name="nama" value="<?= $value['nama_siswa'];?>" class="form-control" placeholder="nama siswa" required/><br/>
            <h5>NIS Siswa:</h5>
            <input type="text" name="nis" value="<?= $value['nis_siswa'];?>" class="form-control" placeholder="nis siswa" required/><br/>
            <h5>Kelas:</h5>
            <input type="text" name="kelas" value="<?= $value['kelas_siswa'];?>" class="form-control" readonly/><br/>
            <h5>Kategori:</h5>
            <input type="text" name="kategori" value="<?= $value['kategori'];?>" class="form-control" readonly/><br/>
            <h4><strong>Mata Pelajaran.</strong></h4>
            <hr>
            <h5>IPA:</h5>
            <input type="text" name="ipa" value="<?= $value['ipa'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>IPS:</h5>
            <input type="text" name="ips" value="<?= $value['ips'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Matematika:</h5>
            <input type="text" name="mtk" value="<?= $value['matematika'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Indonesia:</h5>
            <input type="text" name="bindo" value="<?= $value['bhs_indo'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Inggris:</h5>
            <input type="text" name="bing" value="<?= $value['bhs_ing'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Jawa:</h5>
            <input type="text" name="bjawa" value="<?= $value['bhs_jawa'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PKN:</h5>
            <input type="text" name="pkn" value="<?= $value['pkn'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Seni Budaya:</h5>
            <input type="text" name="sbk" value="<?= $value['sbk'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PJOK:</h5>
            <input type="text" name="pjok" value="<?= $value['pjok'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>TIK:</h5>
            <input type="text" name="tik" value="<?= $value['tik'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Prakarya:</h5>
            <input type="text" name="prakarya" value="<?= $value['prakarya'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Arab:</h5>
            <input type="text" name="barab" value="<?= $value['bhs_arab'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Akidah:</h5>
            <input type="text" name="akidah" value="<?= $value['akidah'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Akhlak:</h5>
            <input type="text" name="akhlak" value="<?= $value['akhlak'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Qur'an dan Hadits:</h5>
            <input type="text" name="quran_hadits" value="<?= $value['quran_hadits'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>SKI:</h5>
            <input type="text" name="ski" value="<?= $value['ski'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Kepesantrenan:</h5>
            <input type="text" name="pesantren" value="<?= $value['pesantren'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Fiqih:</h5>
            <input type="text" name="fiqih" value="<?= $value['fiqih'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Tahfidz:</h5>
            <input type="text" name="tahfidz" value="<?= $value['tahfidz'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h4><strong>Ekstrakurikuler.</strong></h4>
            <hr>
            <h5>Pramuka:</h5>
            <input type="text" name="pramuka" value="<?= $value['pramuka'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Hadroh:</h5>
            <input type="text" name="hadroh" value="<?= $value['hadroh'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
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