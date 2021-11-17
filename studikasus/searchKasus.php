<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Kasus</title>
    <?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>StudiKasusKesulitanBelajarOnline - Search Kasus</title>
</head>
<body>
    <h1>Search Siswa</h1>
    <form action="nemuKasus.php" method="post">
        <table>
            <tr>
                <td>ID Kasus Siswa:</td>
                <td>:</td>
                <td><input type="number" name="id_kasus"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>(1)Susah Fokus Mendengarkan Penjelasan Guru</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>(2)Mengikuti Informasi Tugas</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>(3)Masalah Jaringan dan Kuota</td>
            </tr>  
            <tr>
                <td></td>
                <td></td>
                <td>(4)Masalah Jaringan dan Kuota</td>
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