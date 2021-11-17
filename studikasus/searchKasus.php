<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Kasus</title>
    <link rel="stylesheet" href="tombol.css">
    <link rel="stylesheet" href="style.css">
    <?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Kasus</title>
</head>
<body style="background-color: #00D7FF">
    <h1>Search Siswa</h1>
    <form action="nemuKasus.php" method="post">
        <table>
            <tr>
                <td bgcolor=#2C97DF class="searchSisKas">ID Kasus Siswa:</td>
                <td bgcolor=#2C97DF>:</td>
                <td bgcolor=#2C97DF><input type="number" name="id_kasus"></td>
            </tr>    
        </table>
            <tr>
                <td></td>
                <td></td>
                <td>(1)Susah Fokus Mendengarkan Penjelasan Guru</td>
            </tr><br>
            <tr>
                <td></td>
                <td></td>
                <td>(2)Mengikuti Informasi Tugas</td>
            </tr><br>
            <tr>
                <td></td>
                <td></td>
                <td>(3)Masalah Jaringan dan Kuota</td>
            </tr>  <br>
            <tr>
                <td></td>
                <td></td>
                <td>(4)Masalah Jaringan dan Kuota</td>
            </tr><br><br>
        <input type="submit" name="simpan" value="SEARCH">
    </form>

    
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>