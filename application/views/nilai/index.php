<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- site icons -->
    <link rel="icon" href="<?= base_url('assets/templat') ?>/images/mts.png" type="image/png" />
    <meta http-equiv="Content-type" content="text/html"; charset="windows-1252">
    <title>Nilai siswa</title>
    <style type="text/css"> 
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
        
        .krs_box {
            border: 1px solid #000;
        }
        
        .krs_box * {
            text-align: center;
            padding: 0 1px;
        }
        
        .krs_box td,
        .krs_box th {
            border-right: 1px solid #000;
            border-bottom: 1px solid #000;
        }
        
        .krs_box th {
            font-size: 12px;
        }
        
        .tl {
            text-align: left;
            padding-left: 10px
        }
        
        .tc {
            text-align: center;
            height: 27px;
        }
        
        .tr {
            text-align: right;
        }
        
        .tj {
            text-align: justify;
        }
        
        .fb {
            font-weight: bold;
        }
        
        .line {
            border-bottom: 1px dashed #000;
            clear: both;
        }

    </style>
    <script type="text/javascript" src="chrome-extension://aadgmnobpdmgmigaicncghmmoeflnamj/ng-inspector.js"></script>
</head>
<body cz-shortcut-listen="true">
    <div style="margin:0 auto;width:900px;">
        <br>
        <br>
        <table align="center" width="900" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <td width="350" style="font-weight: bold;text-align: center;">
                        <div style="font-size:25px;font-family:Times New Roman,Times,serif">NILAI UJIAN MURNI SISWA</div>
                        <div style="font-size:20px;">MTs Bima Bhakti Pertiwi</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table border="0" align="center" width="900" cellpadding="0" cellspacing="5" >
            <tbody style="font-size: 20px;font-family:Times New Roman,Times,serif">
<?php ($pts1) ?>
<?php ($pas) ?>
<?php ($pts2) ?>
<?php ($pat) ?>


<?php 
//Jumlah
$jumlahpts1 =  $pts1['ipa']+$pts1['ips']+$pts1['matematika']+$pts1['bhs_indo']+$pts1['bhs_ing']+$pts1['bhs_jawa']+$pts1['pkn']+$pts1['sbk']+$pts1['pjok']+$pts1['tik']+$pts1['prakarya']+$pts1['bhs_arab']+$pts1['akidah']+$pts1['akhlak']+$pts1['quran_hadits']+$pts1['ski']+$pts1['pesantren']+$pts1['fiqih']+$pts1['tahfidz'];
$jumlahpas =  $pas['ipa']+$pas['ips']+$pas['matematika']+$pas['bhs_indo']+$pas['bhs_ing']+$pas['bhs_jawa']+$pas['pkn']+$pas['sbk']+$pas['pjok']+$pas['tik']+$pas['prakarya']+$pas['bhs_arab']+$pas['akidah']+$pas['akhlak']+$pas['quran_hadits']+$pas['ski']+$pas['pesantren']+$pas['fiqih']+$pas['tahfidz'];
$jumlahpts2 =  $pts2['ipa']+$pts2['ips']+$pts2['matematika']+$pts2['bhs_indo']+$pts2['bhs_ing']+$pts2['bhs_jawa']+$pts2['pkn']+$pts2['sbk']+$pts2['pjok']+$pts2['tik']+$pts2['prakarya']+$pts2['bhs_arab']+$pts2['akidah']+$pts2['akhlak']+$pts2['quran_hadits']+$pts2['ski']+$pts2['pesantren']+$pts2['fiqih']+$pts2['tahfidz'];
$jumlahpat =  $pat['ipa']+$pat['ips']+$pat['matematika']+$pat['bhs_indo']+$pat['bhs_ing']+$pat['bhs_jawa']+$pat['pkn']+$pat['sbk']+$pat['pjok']+$pat['tik']+$pat['prakarya']+$pat['bhs_arab']+$pat['akidah']+$pat['akhlak']+$pat['quran_hadits']+$pat['ski']+$pat['pesantren']+$pat['fiqih']+$pat['tahfidz'];

//Rata-Rata
$ratapts1 = $jumlahpts1/19;
$ratapas = $jumlahpas/19;
$ratapts2 = $jumlahpts2/19;
$ratapat = $jumlahpat/19;

//Jumlah
$jumlahpaseks = $pas['pramuka']+$pas['hadroh'];
$jumlahpateks = $pat['pramuka']+$pat['hadroh'];
//Rata-Rata
$ratapaseks = $jumlahpaseks/2;
$ratapateks = $jumlahpateks/2;
?>

                <tr>
                    <td width="100"><strong>NAMA</strong></td>
                    <td width="12"><strong>:</strong></td>
                    <td width="470"><strong><?= $pts1['nama_siswa']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>NIS</strong></td>
                    <td><strong>:</strong></td>
                    <td><strong><?= $pts1['nis_siswa']; ?></strong></td>
                </tr>
                <tr>
                    <td><strong>KELAS</strong></td>
                    <td><strong>:</strong></td>
                    <td><strong><?= $pts1['kelas_siswa']; ?></strong></td>
                </tr>
            </tbody>
        </table>
        <table width="900" align="center" border="0" cellpadding="0" cellspacing="0" class="krs_box">
            <tbody>
                <tr>
                    <th style="font-size: 15px;" rowspan="2" width="30">NO</th>
                    <th style="font-size: 15px;" rowspan="2" width="300">MATA PELAJARAN</th>
                    <th style="font-size: 15px;" colspan="4">NILAI</th>
                </tr>
                <tr>
                    <th style="font-size: 15px;" width="60">PTS 1</th>
                    <th style="font-size: 15px;" width="60">PAS</th>
                    <th style="font-size: 15px;" width="60">PTS 2</th>
                    <th style="font-size: 15px;" width="60">PAT</th>
                </tr>
                <tr>
                    <td height="30">1</td>
                    <td class="tl">ILMU PENGETAHUAN ALAM (IPA)<br></td>
                    <td><?= $pts1['ipa']; ?></td>
                    <td><?= $pas['ipa']; ?></td>
                    <td><?= $pts2['ipa']; ?></td>
                    <td><?= $pat['ipa']; ?></td>
                </tr>
                <tr>
                    <td height="30">2</td>
                    <td class="tl">ILMU PENGETAHUAN SOSIAL (IPS)<br></td>
                    <td><?= $pts1['ips']; ?></td>
                    <td><?= $pas['ips']; ?></td>
                    <td><?= $pts2['ips']; ?></td>
                    <td><?= $pat['ips']; ?></td>
                </tr>
                <tr>
                    <td height="30">3</td>
                    <td class="tl">MATEMATIKA<br></td>
                    <td><?= $pts1['matematika']; ?></td>
                    <td><?= $pas['matematika']; ?></td>
                    <td><?= $pts2['matematika']; ?></td>
                    <td><?= $pat['matematika']; ?></td>
                </tr>
                <tr>
                    <td height="30">4</td>
                    <td class="tl">BAHASA INDONESIA<br></td>
                    <td><?= $pts1['bhs_indo']; ?></td>
                    <td><?= $pas['bhs_indo']; ?></td>
                    <td><?= $pts2['bhs_indo']; ?></td>
                    <td><?= $pat['bhs_indo']; ?></td>
                </tr>
                <tr>
                    <td height="30">5</td>
                    <td class="tl">BAHASA INGGRIS<br></td>
                    <td><?= $pts1['bhs_ing']; ?></td>
                    <td><?= $pas['bhs_ing']; ?></td>
                    <td><?= $pts2['bhs_ing']; ?></td>
                    <td><?= $pat['bhs_ing']; ?></td>
                </tr>
                <tr>
                    <td height="30">6</td>
                    <td class="tl">BAHASA JAWA<br></td>
                    <td><?= $pts1['bhs_jawa']; ?></td>
                    <td><?= $pas['bhs_jawa']; ?></td>
                    <td><?= $pts2['bhs_jawa']; ?></td>
                    <td><?= $pat['bhs_jawa']; ?></td>
                </tr>
                <tr>
                    <td height="30">7</td>
                    <td class="tl">PENDIDIKAN PANCASILA dan KEWARGANEGARAAN (PPKn)<br></td>
                    <td><?= $pts1['pkn']; ?></td>
                    <td><?= $pas['pkn']; ?></td>
                    <td><?= $pts2['pkn']; ?></td>
                    <td><?= $pat['pkn']; ?></td>
                </tr>
                <tr>
                    <td height="30">8</td>
                    <td class="tl">SENI BUDAYA dan KETERAMPILAN (SBK)<br></td>
                    <td><?= $pts1['sbk']; ?></td>
                    <td><?= $pas['sbk']; ?></td>
                    <td><?= $pts2['sbk']; ?></td>
                    <td><?= $pat['sbk']; ?></td>
                </tr>
                <tr>
                    <td height="30">9</td>
                    <td class="tl">PENDIDIKAN JASMANI (PENJAS)<br></td>
                    <td><?= $pts1['pjok']; ?></td>
                    <td><?= $pas['pjok']; ?></td>
                    <td><?= $pts2['pjok']; ?></td>
                    <td><?= $pat['pjok']; ?></td>
                </tr>
                <tr>
                    <td height="30">10</td>
                    <td class="tl">TEKNOLOGI INFORMASI dan KOMUNIKASI (TIK)<br></td>
                    <td><?= $pts1['tik']; ?></td>
                    <td><?= $pas['tik']; ?></td>
                    <td><?= $pts2['tik']; ?></td>
                    <td><?= $pat['tik']; ?></td>
                </tr>
                <tr>
                    <td height="30">11</td>
                    <td class="tl">PRAKARYA<br></td>
                    <td><?= $pts1['prakarya']; ?></td>
                    <td><?= $pas['prakarya']; ?></td>
                    <td><?= $pts2['prakarya']; ?></td>
                    <td><?= $pat['prakarya']; ?></td>
                </tr>
                <tr>
                    <td height="30">12</td>
                    <td class="tl">BAHASA ARAB<br></td>
                    <td><?= $pts1['bhs_arab']; ?></td>
                    <td><?= $pas['bhs_arab']; ?></td>
                    <td><?= $pts2['bhs_arab']; ?></td>
                    <td><?= $pat['bhs_arab']; ?></td>
                </tr>
                <tr>
                    <td height="30">13</td>
                    <td class="tl">AKIDAH<br></td>
                    <td><?= $pts1['akidah']; ?></td>
                    <td><?= $pas['akidah']; ?></td>
                    <td><?= $pts2['akidah']; ?></td>
                    <td><?= $pat['akidah']; ?></td>
                </tr>
                <tr>
                    <td height="30">14</td>
                    <td class="tl">AKHLAK<br></td>
                    <td><?= $pts1['akhlak']; ?></td>
                    <td><?= $pas['akhlak']; ?></td>
                    <td><?= $pts2['akhlak']; ?></td>
                    <td><?= $pat['akhlak']; ?></td>
                </tr>
                <tr>
                    <td height="30">15</td>
                    <td class="tl">QUR'AN HADITS<br></td>
                    <td><?= $pts1['quran_hadits']; ?></td>
                    <td><?= $pas['quran_hadits']; ?></td>
                    <td><?= $pts2['quran_hadits']; ?></td>
                    <td><?= $pat['quran_hadits']; ?></td>
                </tr>
                <tr>
                    <td height="30">16</td>
                    <td class="tl">SEJARAH KEBUDAYAAN ISLAM (SKI)<br></td>
                    <td><?= $pts1['ski']; ?></td>
                    <td><?= $pas['ski']; ?></td>
                    <td><?= $pts2['ski']; ?></td>
                    <td><?= $pat['ski']; ?></td>
                </tr>
                <tr>
                    <td height="30">17</td>
                    <td class="tl">KEPESANTRENAN<br></td>
                    <td><?= $pts1['pesantren']; ?></td>
                    <td><?= $pas['pesantren']; ?></td>
                    <td><?= $pts2['pesantren']; ?></td>
                    <td><?= $pat['pesantren']; ?></td>
                </tr>
                <tr>
                    <td height="30">18</td>
                    <td class="tl">FIQIH<br></td>
                    <td><?= $pts1['fiqih']; ?></td>
                    <td><?= $pas['fiqih']; ?></td>
                    <td><?= $pts2['fiqih']; ?></td>
                    <td><?= $pat['fiqih']; ?></td>
                </tr>
                <tr>
                    <td height="30">19</td>
                    <td class="tl">TAHFIDZ<br></td>
                    <td><?= $pts1['tahfidz']; ?></td>
                    <td><?= $pas['tahfidz']; ?></td>
                    <td><?= $pts2['tahfidz']; ?></td>
                    <td><?= $pat['tahfidz']; ?></td>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Jumlah&nbsp;</th>
                    <th class="tc"><?= $jumlahpts1 ?></th>
                    <th class="tc"><?= $jumlahpas ?></th>
                    <th class="tc"><?= $jumlahpts2 ?></th>
                    <th class="tc"><?= $jumlahpat ?></th>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Rata-rata&nbsp;</th>
                    <th class="tc"><?= round($ratapts1, 2) ?></th>
                    <th class="tc"><?= round($ratapas, 2) ?></th>
                    <th class="tc"><?= round($ratapts2, 2) ?></th>
                    <th class="tc"><?= round($ratapat, 2) ?></th>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <table width="900" align="center" border="0" cellpadding="0" cellspacing="0" class="krs_box">
            <tbody>
                <tr>
                    <th style="font-size: 15px;" rowspan="2" width="30">NO</th>
                    <th style="font-size: 15px;" rowspan="2" width="300">EKSTRAKURIKULER</th>
                    <th style="font-size: 15px;" colspan="4">NILAI</th>
                </tr>
                <tr>
                    <th style="font-size: 15px;" width="60">PTS 1</th>
                    <th style="font-size: 15px;" width="60">PAS</th>
                    <th style="font-size: 15px;" width="60">PTS 2</th>
                    <th style="font-size: 15px;" width="60">PAT</th>
                </tr>
                <tr>
                    <td height="30">1</td>
                    <td class="tl">PRAMUKA<br></td>
                    <td> / &nbsp; &nbsp; / </td>
                    <td><?= $pas['pramuka']; ?></td>
                    <td> / &nbsp; &nbsp; /</td>
                    <td><?= $pat['pramuka']; ?></td>
                </tr>
                <tr>
                    <td height="30">2</td>
                    <td class="tl">HADROH<br></td>
                    <td> / &nbsp; &nbsp; / </td>
                    <td><?= $pas['hadroh']; ?></td>
                    <td> / &nbsp; &nbsp; / </td>
                    <td><?= $pat['hadroh']; ?></td>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Jumlah&nbsp;</th>
                    <th class="tc">  &nbsp;- &nbsp;  </th>
                    <th class="tc"><?= $jumlahpaseks ?></th>
                    <th class="tc">  &nbsp;- &nbsp;  </th>
                    <th class="tc"><?= $jumlahpateks ?></th>
                </tr>
                <tr>
                    <th class="tr" colspan="2">Rata-rata&nbsp;</th>
                    <th class="tc">  &nbsp;- &nbsp;  </th>
                    <th class="tc"><?= round($ratapaseks, 2) ?></th>
                    <th class="tc">  &nbsp;- &nbsp;  </th>
                    <th class="tc"><?= round($ratapateks, 2) ?></th>
                </tr>
            </tbody>
        </table>
        <br>
        <br> 
        <div class="line"></div>
        <!--<table width="100%" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <img src="http://amikom.ac.id/public/fotomhs/2018/18_02_0287.jpg" alt="MUHAMMAD FARRIJ RIFAI" width="150" style="border:2px outset #777777;"> </td>
                </tr>
            </tbody>
        </table>-->
        <br>
        <br>
    </div>
    <div style="text-align:center;" class="tc">
        [
        <a href="javascript:void()" onclick="print()">CETAK</a>
        ]
    </div>
    <br>
    <br>
</body>
</html>