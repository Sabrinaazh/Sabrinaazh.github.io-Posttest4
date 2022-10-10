<?php
include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body
{
    font-family: Arial, Helvetica, sans-serif;
    padding: 0;
    margin: 0;
}



.header
{
    width: 100%;
    align-items: center;
    display: flex;
    flex-direction: row;
    padding: 15px;
    background-color: rgb(250, 204, 212);
    justify-content: space-between;
    position: fixed;
    top: 0;

}

.headerDark
{
    width: 100%;
    align-items: center;
    display: flex;
    flex-direction: row;
    padding: 15px;
    background-color: black;
    justify-content: space-between;
    position: fixed;
    top: 0;

}

.text
{
    text-align: center;
    font-size: 30px;
}

.namaweb
{
    align-items: center;
    display: flex;
    flex-direction: row;
    font-family: 'Times New Roman', Times, serif;
    
}

.judul1
{
    color:white;
    font-weight: 300;
    font-size: 50px;
}

.judul2
{
    color: white;
    font-weight: 300;
    font-size: 50px;
}

.navi
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navi > li
{
    list-style-type: none;
    padding: 12px;
}

.konten
{
    background-color: white;
    color: black;
    margin-top: 101px;
    padding-top: 50px;
}


.dark
{
    background-color: rgb(53, 53, 53);
    color: white;
    margin-top: 101px;
    padding-top: 50px;
}

.navi
{
    margin: 20px;
}

.navi > li > a
{
    text-decoration: none;
    color: white;
}

.navi > li > a:hover
{
    color: crimson;
    transition: all .2s ease-in-out;
}

.adds
{
    align-items: center;
}

.input
{
    padding: 50px;
    background-color: rgb(233, 233, 233);
    text-align: center;
}

.inputDark
{
    padding: 50px;
    background-color: rgb(0, 0, 0);
    text-align: center;
}

.btn
{
    height: 30px;
    width: 100px;
    border-radius: 10px;
}

.box
{
    text-align: center;
}

.box input
{
    border-top: none;
    border-left: none;
    border-right: none;
    width: 300px;
    height: 30px;
    background-color: white;
}



.adds
{

   background-color: orange;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.iklan > img
{
    
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.merk
{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.merk > div
{

    margin: 10px;
    padding: 20px;
}

footer  
{
    background-color: rgb(250, 204, 212);

}

.nama
{
    text-align: center;
    padding: 20px;
    font-weight: bold;
    color: white;
}

.profile
{
    display: flex;
    align-items: center;
}


.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  .switch input { 
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: #000000;
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px rgb(0, 0, 0);
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  
  /* Rounded sliders */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
    </style>
</head>
<body>
    

    <div class="konten" id="container">
        
        <div class="input">

            <form action="penjualan.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto">
                <div class="box" id="kotak">
                    <p>NAMA PRODUK</p>
                    <input type="text" name="nama" placeholder="Masukan Nama Produk">
                    <p>HARGA</p>
                    <input type="number" name="harga" placeholder="Masukan Harga">
                    <p>ALAMAT</p>
                    <input type="text" name="alamat" placeholder="Masukan Alamat"> <br> <br>
                </div>
                <button class="btn">INPUT</button>
            </form>

        </div>


    </div>


    <footer>
        <p class="nama">Sabrina Nur Az-zahra</p>
    </footer>
    <script type="text/javascript" src="script/script.js"></script>
</body>
</html>