<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Nama</title>
    <link rel="stylesheet" href="tombol.css">
    <link rel="stylesheet" href="style.css">
    <?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Nama</title>
</head>
<body style="background-color: #00D7FF">
    <h1>Search Siswa</h1>
    <form action="nemuNama.php" method="post">
        <table>
            <tr>
                <td bgcolor=#2C97DF class="searchSisKas">Nama Pendek Siswa</td>
                <td bgcolor=#2C97DF>:</td>
                <td bgcolor=#2C97DF><input type="text" name="nama_siswa"></td>
            </tr>
        </table>
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