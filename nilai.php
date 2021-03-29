<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header class='header'>
        <h1 class='head'> Daftar Nilai Siswa </h1>
    </header>
    <!-- content -->

    <?php

        $abs1 = ['id'=>1, 'nama_s'=>'Ahmad Fauzi', 'matkul'=>'Pemrograman Web', 'uts'=>78, 'uas'=>85, 'tgs'=>87];
        $abs2 = ['id'=>2, 'nama_s'=>'Aulia Salsabia', 'matkul'=>'Basis Data I', 'uts'=>88, 'uas'=>82, 'tgs'=>92];
        $abs3 = ['id'=>3, 'nama_s'=>'Nuaufal Rizki', 'matkul'=>'Statistik', 'uts'=>76, 'uas'=>79, 'tgs'=>82];
        $abs4 = ['id'=>4, 'nama_s'=>'Bunga Amelia', 'matkul'=>'Statistik', 'uts'=>84, 'uas'=>87, 'tgs'=>80];
        $abs5 = ['id'=>5, 'nama_s'=>'Nida Hanifah', 'matkul'=>'UI/UX', 'uts'=>89, 'uas'=>90, 'tgs'=>95];
        $abs6 = ['id'=>6, 'nama_s'=>'Burhanudin', 'matkul'=>'Basis Data I', 'uts'=>81, 'uas'=>87, 'tgs'=>90];
        $abs7 = ['id '=>7, 'nama_s'=>'badu', 'matkul'=>'Basda', 'uts'=>88, 'uas'=>87, 'tgs'=>90];

        
        $abs8 = ['id' =>8, 'nama_s'=>$_POST['nama_s'], 'matkul'=>$_POST['matkul'], 'uts'=>$_POST['uts'], 'uas'=>$_POST['uas'], 'tgs'=>$_POST['tgs']];

        $abs_nilai = [$abs1,$abs2,$abs3,$abs4,$abs5,$abs6,$abs7,$abs8];


    ?>
    
    <table border="1" width="100%" class='table'>
    <thead>
        <tr>
            <th>No</th><th>Nama</th><th>Matkul</th><th>UTS</th>
            <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($abs_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama_s'].'</td>';
        echo '<td>'.$ns['matkul'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tgs'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tgs'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
        }
        ?>
    </tbody>
    </table>


</body>
</html>
<?php

    
?>