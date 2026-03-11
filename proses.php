<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Pendaftaran Bukber</title>
    </head>
    <body>
    
    <h2>Data Pendaftaran Bukber</h2>

    <?php 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['hp'];
        $jumlah_orang = $_POST['jumlah_orang'];
        $menu = $_POST['menu'];

        echo "Nama : " . $nama . "<br>";
        echo "Email : " . $email . "<br>";
        echo "No HP : " . $no_hp . "<br>";
        echo "Jumlah Orang : " . $jumlah_orang . "<br>";
        echo "Menu Pilihan : " . $menu . "<br>";

    ?>
    </body>
</html>