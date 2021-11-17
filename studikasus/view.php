<?php
    include './koneksi.php';
    echo "<a href='menu.php'>Menu Halaman</a><br>";
    echo "<a href='search.php'>Search Data</a><br>";

    $sql = "SELECT 
    sis.id,
    sis.nis,
    sis.nama_siswa,
    sis.initial,
    sis.jenis_kelamin,
    sis.id_kasus,
    kas.kasus_siswa
    FROM siswa sis, kasus kas 
    WHERE sis.id_kasus = kas.id_kasus";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "NIS : " . $baris[1] . "<br>";
        echo "Nama Pendek Siswa: " . $baris[2] . "<br>";
        echo "Nama Initial Siswa: " . $baris[3] . "<br>";
        echo "Jenis Kelamin : " . $baris[4] . "<br>";
        echo "Jurusan : " . $baris[6] . "<br>";
        $a++;
    }
    $conn->close();
?>

