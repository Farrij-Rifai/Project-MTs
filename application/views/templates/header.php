<!DOCTYPE html>
<html lang="en">
<head> 
  <!-- site metas -->
  <title><?php echo $judul; ?></title> 
  <!-- site icons -->
  <link rel="icon" href="<?= base_url('assets/templat') ?>/images/mts.png" type="image/png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/bootstrap.min.css" />
  <!-- site css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/colors.css" />
  <!-- wow animation css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/animate.css" />
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/navbar.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]> <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script> <![endif]-->
  </head>
   <body id="default_theme" class="home_page1">
    <!-- header -->
  <header class="header">
    
    <nav>
      <div class="logo"><a href="<?= base_url ('home'); ?>">
        <img src="<?= base_url('assets/templat') ?>/images/mts.png"></a>
        MTs Bima Bhakti Pertiwi
        <img src="<?= base_url('assets/templat') ?>/images/kemanag.png">
      </div>
    <label for="btn" class="icon">
       <span class="fa fa-bars"></span>
    </label>
        <input type="checkbox" id="btn">
        <ul>
        <li class="<?php if($this->uri->segment(1)=="home"){echo "active";}?>"><a href="<?= base_url ('home'); ?>">Home</a></li>
        <li>
          <label for="btn-1" class="show">Profil</label>
            <a href="#">Profil</a>
              <input type="checkbox" id="btn-1">
              <ul>
                <li><a href="<?= base_url ('home/profil'); ?>">Profil</a></li>
                <li><a href="<?= base_url ('home/sambutan'); ?>">Sambutan</a></li>
                <li><a href="<?= base_url ('#'); ?>">Sejarah</a></li>
                <li><a href="<?= base_url ('#'); ?>">Visi Misi</a></li>
                <li><a href="<?= base_url ('#'); ?>">Fasilitas</a></li>
              </ul>
        </li>
        <li>
          <label for="btn-2" class="show">Akademik</label>
          <a href="#">Akademik</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a href="<?= base_url ('home/akademik'); ?>">Ekskul</a></li>
            <li><a href="#">Mapel</a></li>
            <li><a href="#">Biaya</a></li>
            <li><a href="<?= base_url('home/nilai_siswa'); ?>">Nilai Siswa</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-3" class="show">PPDB</label>
          <a href="#">PPDB</a>
          <input type="checkbox" id="btn-3">
            <ul>
              <li><a href="<?= base_url ('home/info_ppdb'); ?>">Info PPDB</a></li>
              <li><a href="<?= base_url ('form'); ?>">Daftar</a></li>
            </ul>
        </li>
        <li><a href="<?= base_url ('home/galeri'); ?>">Galeri</a></li>
        <li><a href="<?= base_url ('home/kontak'); ?>">Kontak</a></li>
        
    </nav>
    </header>