<!--form pendaftaran-->
<div id="page-wrap">
  <h2 align="center">FORM PENDAFTARAN PESERTA DIDIK BARU MADRASAH TSANAWIYAH BIMA BHAKTI PERTIWI</h2>
</br></br>

<?php if ($this->session->flashdata('flash') ):  ?>
  <div class="alert alert-success alert-dismissible" role="alert">
    Pendaftaran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="alert alert-success alert-dismissible" role="alert">
    Data yang telah anda inputkan akan di cek oleh admin 1x24 jam pada jam kerja. bila ditemukan data yang tidak sesuai maka admin akan menghubungi melalui "WhatsApp" pada nomor yang telah anda inputkan <strong><?= $this->session->flashdata('flash1'); ?>.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<div class="container p-3 my-3 border">
 <form id="form" method="post" action="<?= base_url('form'); ?>" enctype="multipart/form-data">

  <?php if( validation_errors() ): ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
    </div>
  <?php endif; ?>

<div class="alert alert-primary">
  <strong>Data Diri</strong>
</div>
<div class="row">
  <div class="col-sm-7">
    <div class="form-group">
      <label> <h4>Nama Lengkap:</h4></label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama') ?>">
      <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Nomor Identitas (NIK):</h4></label>
      <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK" value="<?= set_value('nik') ?>">
      <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Tempat Lahir:</h4></label>
      <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" value="<?= set_value('tempat_lahir') ?>">
      <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <label><h4>Tanggal Lahir:</h4></label>
      <input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>">
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Jenis Kelamin:</h4></label>
      <select class="form-control" name="jk">
        <option value="NULL">-PILIH JENIS KELAMIN-</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
  </div>
</div>

<div class="row">

  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kewarganegaraan:</h4></label>
      <select class="form-control" name="kewarganegaraan">
        <option value="NULL">-PILIH KEWARGANEGARAAN-</option>
        <option value="WNI">Warga Negara Indonesia</option>
        <option value="WNA">Warga Negara Asing</option>
      </select>
    </div>
  </div>
  <div class="col-sm-3"> 
    <div class="form-group">
      <label><h4>Agama:</h4></label>
      <select class="form-control" name="agama">
        <option value="NULL">-PILIH AGAMA-</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Nama Orang Tua/Wali:</h4></label>
      <input type="text" name="nama_wali" class="form-control" placeholder="Masukan Nama Ibu Kandung" value="<?= set_value('nama_wali') ?>">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Email:</h4></label>
      <input type="email" name="email" class="form-control" placeholder="Masukan Email" value="<?= set_value('email') ?>">
      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <label><h4>No Telp(WhatApp):</h4></label>
      <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp" value="<?= set_value('no_telp') ?>">
      <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>
<div class="alert alert-primary">
  <strong>Data Alamat Asal</strong>
</div>
<div class="row">
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Alamat:</h4></label>
      <textarea class="form-control" name="alamat" rows="2" id="alamat" value="<?= set_value('alamat') ?>"></textarea>
      <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="form-group">
      <label><h4>Kode Pos:</h4></label>
      <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?= set_value('kode_pos') ?>">
    </div>
  </div>
</div>
 
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Provinsi:</h4></label>
      <select class="form-control" name="provinsi" id="provinsi">
        <option value="0">-PILIH PROVINSI-</option>
       <?php foreach($data->result() as $row):?>
          <option value="<?php echo $row->id;?>"><?php echo $row->nama_prov;?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kabupaten:</h4></label>
      <select class="form-control" name="kabupaten" id="kabupaten">
        <option value="0">-PILIH KABUPATEN-</option>
        <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kecamatan:</h4></label>
      <select class="form-control" name="kecamatan" id="kecamatan">
        <option value="0">-PILIH KECAMATAN-</option>
        <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
      </select>
    </div>
  </div>

</div>

<div class="alert alert-primary">
  <strong>Data Pendidikan</strong>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Pendidikan Terakhir:</h4></label>
      <select class="form-control" name="pendidikan">
        <option value="NULL">-PILIH PENDIDIKAN TERAKHIR-</option>
        <option value="SD">SD</option>
        <option value="MI">MI</option>
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Nama Sekolah:</h4></label>
      <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukan Nama Sekolah" value="<?= set_value('sekolah') ?>">
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Rata-rata Nilai Rapor Kelas 6:</h4></label>
      <input type="text" name="nilai_raport" class="form-control"
      placeholder="Masukan Rata-rata nilai raport" value="<?= set_value('nilai_raport') ?>">
      <?= form_error('nilai_raport', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>NISN:</h4></label>
      <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN" value="<?= set_value('nisn') ?>">
      <?= form_error('nisn', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>
<div class="alert alert-primary">
  <strong>Lampiran</strong>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>PAS FOTO:</h4></label>
      <p>#pas foto</p>
      <input type="file" name="pasfoto" class="form-control" required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>IJAZAH:</h4></label>
      <p>#scan berupa foto menggunakan aplikasi android</p>
      <input type="file" name="fotoijazah" class="form-control" required>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>KARTU KELUARGA:</h4></label>
      <p>#scan berupa foto menggunakan aplikasi android</p>
      <input type="file" name="fotokk" class="form-control" required>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</div>
</form> 
</div>
</div>

<!--end form pendataran-->