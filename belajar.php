<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                padding: 25px;
                background-color: white;
                color: black;
            }
            .dark-mode {
                background-color: #090d1c;
                color: white;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: center;
                padding: 8px;
                border: 1px solid gray;
            }


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
            body {font-family: Arial, Helvetica, sans-serif;}

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }
            
            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }

            
        </style>
</head>
<style>
    
</style>
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
  <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-fw fa-user"></i> Login</a>
  <div id="id01" class="modal">
  
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="itzy.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
    </form>

</div>
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
<button onclick="myFunction()">Toggle dark mode</button>
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
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
    var td = document.getElementsByTagName("td");
    var i = 0, tds = td.length;
    for (i; i < tds; i++) {
        if (td[i].innerHTML == 0) {
            td[i].setAttribute("style", "background:red;");
        }
    }

    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
    }
    

}
</script>



</body>
</html>