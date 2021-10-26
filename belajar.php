<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: center;
                padding: 8px;
                border: 1px solid gray;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th {
                background-color: #04AA6D;
                color: white;
            }
            html {
                box-sizing: border-box;
            }

            *, *:before, *:after {
                box-sizing: inherit;
            }

            .column {
                float: left;
                width: 33.3%;
                margin-bottom: 16px;
                padding: 0 8px;
            }

            @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
             }
            }

            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .container {
                padding: 0 16px;
            }

            .container::after, .row::after {
                content: "";
                clear: both;
                display: table;
            }

            .title {
                color: grey;
            }

            .button {
                border: none;
                outline: 0;
                display: inline-block;
                padding: 8px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
            }

            .button:hover {
                background-color: #555;
            }
            body {font-family: Arial, Helvetica, sans-serif;}

            .navbar {
                width: 100%;
                background-color: #555;
                overflow: auto;
            }

            .navbar a {
                float: left;
                padding: 12px;
                color: white;
                text-decoration: none;
                font-size: 17px;
            }

            .navbar a:hover {
                background-color: #000;
            }

            .active {
                background-color: #04AA6D;
            }

            @media screen and (max-width: 500px) {
                .navbar a {
                    float: none;
                    display: block;
                }
            }
            #myImg {
                border-radius: 5px;
                cursor: pointer;
                transition: 0.5s;
            }

            #myImg:hover {opacity: 0.7;}

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            }

            /* Modal Content (image) */
            .modal-content {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
            }

/* Caption of Modal Image */
            #caption {
                margin: auto;
                display: block;
                width: 80%;
                max-width: 700px;
                text-align: center;
                color: #ccc;
                padding: 10px 0;
                height: 150px;
            }

/* Add Animation */
            .modal-content, #caption {  
                -webkit-animation-name: zoom;
                -webkit-animation-duration: 0.6s;
                animation-name: zoom;
                animation-duration: 0.6s;
            }

            @-webkit-keyframes zoom {
                from {-webkit-transform:scale(0)} 
                to {-webkit-transform:scale(1)}
            }

            @keyframes zoom {
                from {transform:scale(0)} 
                to {transform:scale(1)}
            }

            /* The Close Button */
            .close {
                position: absolute;
                top: 15px;
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                transition: 0.3s;
            }

            .close:hover,
            .close:focus {
                color: #bbb;
                text-decoration: none;
                cursor: pointer;
            }

            /* 100% Image Width on Smaller Screens */
            .column {
                float: left;
                width: 25%;
            }


            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
        </style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<?php
$barang     = array("Beras", "Ketan Hitam","Ketan Putih", "Kacang Hijau");
$beratkg    = array(100,140,120,40);
$beratgr    = array();
$beratmg    = array();
$beratlit   = array();
$stok       = array(0,12,32,0);

for ($x = 0; $x < 4; $x++) {
    $beratgr[$x]     = $beratkg[$x]*1000;
    $beratmg[$x]     = $beratkg[$x]*100000;
    $beratlit[$x]    = $beratkg[$x]*100;
    
  }

?>

<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
</div>
<br>
<h2>Timbangan Pak Joy</h2>
<table>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Berat (kg)</th>
        <th>Berat (gr)</th>
        <th>Berat (mg)</th>
        <th>Berat (liter)</th>
        <th>stok</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php echo $barang[0]; ?></td>
        <td><?php echo $beratkg[0]; ?></td>
        <td><?php echo $beratgr[0]; ?></td>
        <td><?php echo $beratmg[0]; ?></td>
        <td><?php echo $beratlit[0]; ?></td>
        <td><?php echo $stok[0]; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td><?php echo $barang[1]; ?></td>
        <td><?php echo $beratkg[1]; ?></td>
        <td><?php echo $beratgr[1]; ?></td>
        <td><?php echo $beratmg[1]; ?></td>
        <td><?php echo $beratlit[1]; ?></td>
        <td><?php echo $stok[1]; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td><?php echo $barang[2]; ?></td>
        <td><?php echo $beratkg[2]; ?></td>
        <td><?php echo $beratgr[2]; ?></td>
        <td><?php echo $beratmg[2]; ?></td>
        <td><?php echo $beratlit[2]; ?></td>
        <td><?php echo $stok[2]; ?></td>
    </tr>
    <tr>
        <td>4</td>
        <td><?php echo $barang[3]; ?></td>
        <td><?php echo $beratkg[3]; ?></td>
        <td><?php echo $beratgr[3]; ?></td>
        <td><?php echo $beratmg[3]; ?></td>
        <td><?php echo $beratlit[3]; ?></td>
        <td><?php echo $stok[3]; ?></td>
    </tr>

</table>
<br>
<div class="row">
    <div class="column">
        <img id="myImg" src="beras.jpg" alt="Beras" style="width:100%;max-width:300px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>
    <div class="column">
        <img id="myImg" src="ketan_hitam.jpg" alt="Ketan Hitam" style="width:100%;max-width:300px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>
    <div class="column">
        <img id="myImg" src="ketan_putih.jpg" alt="Ketan Putih" style="width:100%;max-width:300px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>
    <div class="column">
        <img id="myImg" src="kacang_hijau.jpg" alt="Kacang Hijau" style="width:100%;max-width:300px">
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </div>
    </div>
</div>
<h2>Meet The Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="pasfoto.jpg" alt="Jane" style="width: 30%;border-radius: 20%">
      <div class="container">
        <h2>Mahran Radifan Zhafir</h2>
        <p class="title">105219001</p>
        <p>lorem ipsum ipsum lorem dolor sit amet, consectetur adipiscing elit.</p>
        <p>tes@tes.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<script>
    var td = document.getElementsByTagName("td");
    var i = 0, tds = td.length;
    for (i; i < tds; i++) {
        if (td[i].innerHTML == 0) {
            td[i].setAttribute("style", "background:red;");
    }
}
</script>



</body>
</html>