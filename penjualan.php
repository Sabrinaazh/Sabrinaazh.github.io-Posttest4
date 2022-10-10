<?php
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    

    <div class="konten" id="container">

        <div class="merk">

        <?php
            $nama = $_POST["nama"];
            $harga = $_POST["harga"];
            $alamat = $_POST["alamat"];

            $gambar = $_FILES["foto"]["name"];
            $temp_name = $_FILES["foto"]["tmp_name"];
            move_uploaded_file($temp_name, "Gambar/".$gambar);
        
        ?>

    
            <div>
                <img src="Gambar/<?php echo $gambar ?>" alt="produk" width="30%">
                <p><?php echo $nama ?><br> <b><?php echo "Rp. $harga" ?></b><br><?php echo $alamat ?></p>
            </div>
    
        </div>
    </div>


    <footer>
        <p class="nama">Sabrina Nur Az-zahra</p>
    </footer>
    <script type="text/javascript" src="script/script.js"></script>
</body>
</html>