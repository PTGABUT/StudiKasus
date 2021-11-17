<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Nama</title>
    <?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Nama</title>
</head>
<body>
    <h1>Search Siswa</h1>
    <form action="nemuNama.php" method="post">
        <table>
            <tr>
                <td>Nama Pendek Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama_siswa"></td>
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