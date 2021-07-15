<div id="page-wrap">
<div>
    <ul>
        kelas
        <li>
            <a href="<?= base_url('pesdik'); ?>">all siswa</a>
        </li>
        <li>
            <a href="<?= base_url('pesdik/kelas7'); ?>">kelas 7</a>
        </li>
        <li>
            <a href="<?= base_url('pesdik/kelas8'); ?>">kelas 8</a> 
        </li>
        <li>
            <a href="<?= base_url('pesdik/kelas9'); ?>">kelas 9</a>
        </li>
    </ul>
</div>






<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="content-wrapper"> 

    
<h3 style="text-align: center; padding-top: 50px;">Daftar Siswa MTs Bima Bhakti Pertiwi</h3>

<section style="padding-left: 300px">
    <div class="container-fluid">
        
        
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Siswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="card" style="width: 700px">
              
              <!-- /.card-header -->
              <div class="card-body">

    <table class="table table-bordered " id="mydata" >
        <thead>
            <tr>
                <th width="20">No</th>
                <th width="330">Nama</th>
                <th width="150">NIS</th>
                <th width="100">Kelas</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($siswa as $sis) : ?>
                <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $sis['nama_siswa']; ?></td>
                    <td><?= $sis['nis_siswa']; ?></td>
                    <td><?= $sis['kelas_siswa']; ?></td>
                        
                    </td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>
</div>
</div>
</section>



</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
</div>