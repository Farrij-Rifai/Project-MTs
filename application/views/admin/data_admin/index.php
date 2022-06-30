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
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i> Tambah Akun Admin</button>
            </div>
        </div>
        <hr/>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Akun Admin <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
        <h3 class="card-title">DataTable Admin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body"> 

        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <th width="20">No</th>
                    <th width="200">Username</th>
                    <th width="200">Password</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
                    <tbody>
                            <?php $i = 1;
                            foreach ($akun as $value) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $value['username']; ?></td>
                                    <td><?= $value['password']; ?></td>
                                    <td>
                            <!--<a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id_admin'];?>"> detail</a>
                            <a id="detail" type="button" data-toggle="modal" data-target="#editModal<?= $value['id_admin'];?>" class="btn bg-success">edit</a>-->
                            <a href="<?= base_url(); ?>admin/akun/hapus/<?= $value['id_admin'];?>" class="btn bg-danger" onclick="return confirm('akun akan dihapus?')" >hapus</a>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Form tambah akun admin</h4>
            <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('admin/akun/tambah_akun')?>" method="post" enctype="multipart/form-data">
                    <h5>Nama admin:</h5>
                    <input type="text" name="nama" class="form-control" placeholder="Nama admin" required/><br/>
                    <h5>Username:</h5>
                    <input type="text" name="username" class="form-control" placeholder="Username" required/><br/>
                    <h5>Password:</h5>
                    <input type="password" name="password" class="form-control" placeholder="Password" required/><br/>
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

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
