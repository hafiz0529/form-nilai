<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title> Form Nilai </title>
</head>
<body>
    <!-- header -->
    <header>
    <h2 class='h2'>
        Sistem Penilaian
    </h2>
    </header>
    <h2 class='h22'>
        Form Nilai Siswa
    </h2>
    <hr/>
    <!-- content -->
    <form action="nilai.php" method="POST" >
        <p class='p1'> Nama Lengkap </p>
        <input class='box1'type="text" name='nama_s'> <br/>
        <p class='p2'> Mata Kuliah </p>
        <select class="matkul" name="matkul">
            <option selected>Pilih Mata Kuliah :</option>
            <option  value="UI/UX">UI/UX</option>
            <option  value="BASDAT"> Basis Data I</option>
            <option  value="WEB1">Pemrograman Web </option>
            <option  value="STTK">Statistik</option>
        </select>
        <p class='p3'> Nilai UTS </p>
        <input class='uts' type="number" name='uts' max='100' min='1'>
        <p class='p4'> Nilai UAS </p>
        <input class='uas' type="number" name='uas'  max='100' min='1'>
        <p class='p5'> Nilai Tugas/Praktikum </p>
        <input class='tgs' type="number" name='tgs'  max='100' min='1'>
        <br/>
        <input class= "simpan" type="submit" name="simpan" value="simpan">
    </form>

    <?php
    $nama_s = $_POST ['nama_s'];
    $matkul = $_POST ['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tgs = $_POST['tgs'];
    ?>
</body>
</html>