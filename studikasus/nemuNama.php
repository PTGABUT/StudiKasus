<!DOCTYPE html>
<html>
<head>
	<title>StudiKasusKesulitanBelajarOnline - View</title>
    <link rel="stylesheet" href="tombol.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #00D7FF">
<?php
    include './koneksi.php';
    
    $namaLengkap = $_POST['nama_siswa'];
    
    echo "<a href='menu.php' class='tombol'>Menu Halaman</a><br><br>";
    echo "<a href='search.php' class='tombol'>Search Data</a><br>";

    $sql = "SELECT 
    sis.id,
    sis.nis,
    sis.nama_siswa,
    sis.initial,
    sis.jenis_kelamin,
    sis.id_kasus,
    kas.kasus_siswa
    FROM siswa sis, kasus kas WHERE sis.id_kasus = kas.id_kasus AND nama_siswa='".$namaLengkap."'";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "<table>";
        echo "<tr> <td bgcolor=#C8C8C8> NIS </td> <td bgcolor=#C8C8C8> " . $baris[1] . " </td> </tr> ";
        echo "<tr> <td bgcolor=white> Nama Pendek Siswa </td> <td bgcolor=white>" . $baris[2] . "</td> </tr> ";
        echo "<tr> <td bgcolor=#C8C8C8> Nama Initial Siswa </td> <td bgcolor=#C8C8C8>" . $baris[3] . "</td> </tr> ";
        echo "<tr> <td bgcolor=white> Jenis Kelamin </td> <td bgcolor=white>" . $baris[4] . "</td> </tr> ";
        echo "<tr> <td bgcolor=#C8C8C8> Jurusan </td> <td bgcolor=#C8C8C8>" . $baris[6] . "</td> </tr> ";
        echo "</table>";
        $a++;
    }
    echo "<br><a href='view.php' class='tombol'>Lihat Semua Data</a><br>";
    
    $conn->close();

?>
</body>
</html>

