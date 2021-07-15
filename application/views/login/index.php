  <div class="container"> 
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center mt-5 mb-3">
                <img src="<?= base_url('assets/templat/images/mts.png'); ?>" class="login" />
                <h3 class="text-white mt-2">MTs Bima Bhakti Pertiwi</h3>
                <h7 class="text-white mt-2">Login Administrator</h7>

            </div>
            <div class="col-md-4 col-sm-12 offset-md-4">
                <div class="jumbotron py-3 pt-4">
                     <?= form_open(); ?>

                    <form action="<?= base_url('loginadmin'); ?>" method="post">
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control" name="username"  placeholder="Username" autocomplete="off">
                        <div class="invalid-feedback">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i> Password</label>
                        <br>
                        <input type="password" class="form-password" placeholder="Password" name="password" autocomplete="off">
                        <div class="invalid-feedback">
                         <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <br>
                        <input type="checkbox" class="form-checkbox"> Show Password
                        
                    </div>

                    <div class="form-group float-right">
                        <button type="submit" name="submit" value="submit" class="btn bg-success text-white btn-sm">Login <i class="fa fa-sign-in"></i></button>
                    </div>
                    <div class="clearfix"></div>
                    <?= form_close(); ?>
                </form>
                </div>
                <p class="text-white text-center">Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> MTs Bima Bhakti Pertiwi
            </div>
        </div>
    </div>